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
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }



    
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $GoalTitle = '> Index - goal';
        $goals = Goal::paginate(6);
        // $user = User::all();
        $user = Auth::user();
        $permissions = $user->permissions;
        $role = Role::where('name', 'Admin')->first();
        
        // $roles = $role->givePermissionTo('Edit Goals');


        echo $role->name;
        // $permissions = Permission::all();
        // $permissions = $user->permissions;
        if ($user->hasPermissionTo('view goals')) {
            return view('goal.index',compact('goals','GoalTitle'));
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
        
        
        if ($user->hasPermissionTo('Create Goals')) {
            return view('goal.create');
        }else{
            return view('errors.401');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goal = new Goal();

        
        $goal->goal_title = $request->goal_title;

        
        $goal->goal_discerption = $request->goal_discerption;

        
        
        $goal->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new goal has been created !!']);

        return redirect('goal');
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
        // $InitiativeCount = Initiative::where('project_id', $id)
        // ->where('status', 'Accomplished')->count();
        // $InitiativeCount = Goal::where('id', $id)->with('initiatives')->get();
        // echo $InitiativeCount;
        // foreach ($goal->initiatives as $initiative) {
        //     if ($initiative->status == 'Accomplished') {
        //         echo $initiative->status;
        //     }
        // }
        // $InitiativeCount = Goal::whereHas('initiatives', function($offerQuery){
        // $offerQuery->where('status', '=', 'Accomplished');
        // })->get();
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
        $InitiativePercent = (($InitiativeCounted / $InitiativeCountedAll) * 100);
        echo $InitiativePercent;
        // echo $InitiativeCounted, $InitiativeNotCounted;

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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/goal/'. $id . '/delete');
        

        if ($user->hasPermissionTo('Delete Goals')) {
                if($request->ajax())
            {
                return $msg;
            }
        }else{
            return view('errors.401');
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
        $goal->users()->attach($request->user_id);

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
