<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Initiative;
use App\Action_plan;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Project;
use App\Goal;


/**
 * Class InitiativeController.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:10:49pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InitiativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - initiative';
        $initiatives = Initiative::paginate(6);
        return view('initiative.index',compact('initiatives','title'));
    }

    public function list($id,Request $request)
    {
        // $title = 'list - initiative';
        $initiatives = Initiative::where('project_id', $id)->paginate(6);

        $ProjectName = Project::findOrfail($id);
        $ProjectTitle = '> ' . $ProjectName->project_title;
        $GoalId = $ProjectName->goal_id;

        $GoalName = Goal::findOrfail($GoalId);
        $GoalTitle = '> ' . $GoalName->goal_title;
        // return view('project.list',compact('projects','title'));
        // return view('scaffold-interface.layouts.defaultMaterialize',compact('GoalTitle','ProjectTitle'));

        return view('initiative.list',compact('initiatives','GoalTitle','ProjectTitle'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - initiative';

        $projects = Project::all()->pluck('project_title','id');

        return view('initiative.create',compact('title','projects'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $initiative = new Initiative();


        $initiative->initiative_title = $request->initiative_title;


        $initiative->initiative_description = $request->initiative_description;


        $initiative->kpi_previous = $request->kpi_previous;


        $initiative->kpi_current = $request->kpi_current;


        $initiative->kpi_target = $request->kpi_target;

        $initiative->status = $request->status;

        $initiative->why_if_not = $request->why_if_not;

        $initiative->dod_note = $request->dod_note;

        $initiative->project_id = $request->project_id;


        $initiative->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new initiative has been created !!']);

        return redirect('initiative');
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
        $title = 'Show - initiative';

        if($request->ajax())
        {
            return URL::to('initiative/'.$id);
        }
        $action_plans = Action_plan::where('initiative_id', $id)->paginate(6);
        //return view('action_plan.index',compact('action_plans','title'));
        $initiative = Initiative::findOrfail($id);


        $ProjectName = Project::findOrfail($initiative->project_id);
        $ProjectTitle = '> ' . $ProjectName->project_title;
        $GoalId = $ProjectName->goal_id;

        $GoalName = Goal::findOrfail($GoalId);
        $GoalTitle = '> ' . $GoalName->goal_title;

        return view('initiative.show',compact('title','initiative','action_plans','ProjectTitle','GoalTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - initiative';
        $initiative = Initiative::findOrfail($id);
        $users = \App\User::all()->pluck('name','id');

        if($request->ajax())
        {
            return URL::to('initiative/'. $id . '/edit');
        }


        $projects = Project::all()->pluck('project_title','id');



        return view('initiative.edit',compact('title','initiative' ,'projects','users' ) );
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
        $initiative = Initiative::findOrfail($id);

        $initiative->initiative_title = $request->initiative_title;

        $initiative->initiative_description = $request->initiative_description;

        $initiative->kpi_previous = $request->kpi_previous;

        $initiative->kpi_current = $request->kpi_current;

        $initiative->kpi_target = $request->kpi_target;

        $initiative->status = $request->status;

        $initiative->why_if_not = $request->why_if_not;

        $initiative->dod_note = $request->dod_note;

        $initiative->project_id = $request->project_id;

        $initiative->user_id = $request->user_id;


        $initiative->save();

        return redirect('initiative');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/initiative/'. $id . '/delete');

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
     	$initiative = Initiative::findOrfail($id);
     	$initiative->delete();
        return URL::to('initiative');
    }
}
