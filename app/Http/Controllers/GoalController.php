<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goal;
use App\User;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Pusher;
use App\Project;
use App\Initiative;
use Auth;
// use Session;


/**
 * Class GoalController.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:18:16am
 * @link  https://github.com/amranidev/scaffold-interface
 */



class GoalController extends Controller
    {

        public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }




    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        $title = 'Goals';
        // $goals = Goal::paginate(20);
        // $user = User::all();
        if($user->hasRole('Responsible'))
        {
            return redirect('initiative');
        }

          // $permissions = $user->permissions;
          // $role = Role::where('name', 'Admin')->first();
          if ($user->hasRole('Admin')) {
            $goals = Goal::paginate(20);
          }elseif ($user->hasRole('Owner')) {
            $user = Auth::user();
            $userId = $user->id;
            $goals = Goal::whereHas('users', function ($q) use ($userId) {
                $q->where('user_id', $userId);
            })->paginate(20);
          }else{
              return view('errors.401');
          }
          if ($user->hasPermissionTo('view goals')) {
              return view('goal.index',compact('goals','GoalTitle','GoalID'));
          }else{
              return view('errors.401');
          }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */



    public function create()
    {
        $title = 'Create - goal';
        $user = Auth::user();

            return view('goal.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request, [
      'goal_title' => 'required|max:191|string',
      'goal_discerption' => 'required|string',
  ]);
        $goal = new Goal();


        $goal->goal_title = $request->goal_title;


        $goal->goal_discerption = $request->goal_discerption;



        $goal->save();

        $options = array(
          'cluster' => 'ap2',
          'encrypted' => true
        );
        $pusher = new Pusher(
          env("PUSHER_APP_KEY"),
          env("PUSHER_APP_SECRET"),
          env("PUSHER_APP_ID"),
          $options
        );

        $data['message'] = $request->goal_title . ' created';
        $pusher->trigger('my-channel', 'my-event', $data);

        return redirect('project/list/'. $goal->id);

    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - goal';

        if($request->ajax())
        {
            return URL::to('project/list/'.$id);
        }

        $goal = Goal::findOrfail($id);

        $ProjectCount = Project::where('goal_id', $id)->count();
        $InitiativeCount = DB::table('goals')
            ->join('projects', 'goals.id', '=', 'projects.goal_id')
            ->join('initiatives', 'projects.id', '=', 'initiatives.project_id')
            ->select('initiatives.*', 'initiatives.initiative_title')
            ->where('goals.id', '=', $id)
            ->get();

        foreach ($InitiativeCount as $item) {
            echo '<ul><li>' . $item->status . '</li></ul>';
        }

        $InitiativeCounted = $InitiativeCount->where('status', '=', 'Accomplished')->count();
        $InitiativeNotCounted = $InitiativeCount->where('status', '=', 'Not Accomplished')->count();
        $InitiativeCountedAll = ($InitiativeCounted + $InitiativeNotCounted);
        $InitiativePercent = $InitiativeCountedAll == 0 ? 0 : (($InitiativeCounted / $InitiativeCountedAll) * 100);
        echo $InitiativePercent;
        // echo $InitiativeCounted, $InitiativeNotCounted;
        $user = Auth::user();
        $goal = Goal::findOrfail($id);

        $userGoals = $goal->users;
        foreach ($userGoals as $userGoal) {
            echo '<br>' . $userGoal->id;
            if ($user->id == $userGoal->id) {
              return view('goal.show',compact('title','goal','ProjectCount','InitiativeCounted','InitiativePercent'));
            }else {
              return view('errors.401');
            }
        }
        // foreach ($userGoals as $userGoal) {
        //   echo $userGoal->id, $userGoal->name, $goal->id;
        //   // if ($userGoal->id == $goal->user_id) {
        //   //   echo "owner";
        //   // }
        // }
        // echo $userGoals;

        return view('goal.show',compact('title','goal','ProjectCount','InitiativeCounted','InitiativePercent'));
    }


    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - goal';
        $users = \App\User::all();

        if($request->ajax())
        {
            return URL::to('goal/'. $id . '/edit');
        }

        $user = Auth::user();
        $goal = Goal::findOrfail($id);

        $userGoals = $goal->users;

        // $test = Goal::with('users')->where('id', $id)->get();
        // echo $test;

        if ($user->hasPermissionTo('edit goals')) {
            return view('goal.edit',compact('title','goal','users','userGoals'));
        }else{
            return view('errors.401');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $goal = Goal::findOrfail($id);

        $goal->goal_title = $request->goal_title;

        $goal->goal_discerption = $request->goal_discerption;


        $goal->save();

        return redirect('goal');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
      $user = Auth::user();
      $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/goal/'. $id . '/delete');

        if ($user->hasPermissionTo('delete goals')) {
                $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/goal/'. $id . '/delete');
        }else{
                return('Access Denied');
        }


                if($request->ajax())
            {
                return $msg;
            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goal = Goal::findOrfail($id);
        $goal->delete();
        return URL::to('goal');
    }


    /**
     * Assign users to goals
     *
     */
        public function addUserGoals(Request $request)
    {
        $goal = Goal::findorfail($request->goal_id);
        // $user = User::findorfail($request->user_id);
        // if (! $goal->users->contains($request->user_id)) {
        //     // $cart->items()->save($newItem);
        //     echo "already assigned";
        // }
        $goal->users()->syncWithoutDetaching($request->user_id);

        // $user = \App\User::findorfail($request->user_id);
        // $user->givePermissionTo($request->permission_name);

        return redirect('goal/'.$request->goal_id. '/edit');
    }

    /**
     * Remove assigned users to goals
     *
     */
        public function removeUserGoals($user_id, $goal_id)
    {
        $goal = Goal::findorfail($goal_id);

        $goal->users()->detach($user_id);

        return redirect('goal/'.$goal_id.'/edit');
    }
}
