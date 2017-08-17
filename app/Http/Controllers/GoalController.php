<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goal;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Illuminate\Support\Facades\DB;

use App\Project;
use App\Initiative;

/**
 * Class GoalController.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:18:16am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $GoalTitle = '> Index - goal';
        $goals = Goal::paginate(6);
        return view('goal.index',compact('goals','GoalTitle'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - goal';
        
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
        if($request->ajax())
        {
            return URL::to('goal/'. $id . '/edit');
        }

        
        $goal = Goal::findOrfail($id);
        return view('goal.edit',compact('title','goal'  ));
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
}
