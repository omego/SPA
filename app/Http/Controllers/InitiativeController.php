<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Initiative;
use App\Initiative_attachment;
use App\Action_plan;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Auth;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Pusher;
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
        $title = 'Index - initiative';
        $initiatives = Initiative::paginate(6);
        if (Auth::check()) {
          $user = Auth::user();
          $permissions = $user->permissions;
          $role = Role::where('name', 'Admin')->first();
          if ($user->hasPermissionTo('view initiatives')) {
        return view('initiative.index',compact('initiatives','title'));
      }else{
        return view('errors.401');
      }
    }
  }

    public function list($id,Request $request)
    {
        $user = Auth::user();
        // $permissions = $user->permissions;
        // $role = Role::where('name', 'Admin')->first();
        if ($user->hasRole('Admin')) {
        $initiatives = Initiative::where('project_id', $id)->paginate(6);
        }elseif ($user->hasRole('Owner')) {
          $user = Auth::user();
          $userId = $user->id;
        $initiatives = Initiative::where('user_id', $userId)->paginate(6);
        }else{
            return view('errors.401');
        }


        // $title = 'list - initiative';
        $initiatives = Initiative::where('project_id', $id)->paginate(6);

        $ProjectName = Project::findOrfail($id);
        $ProjectTitle = $ProjectName->project_title;
        $GoalId = $ProjectName->goal_id;

        $GoalName = Goal::findOrfail($GoalId);
        $GoalTitle = $GoalName->goal_title;
        // return view('project.list',compact('projects','title'));
        // return view('scaffold-interface.layouts.defaultMaterialize',compact('GoalTitle','ProjectTitle'));
        if ($user->hasPermissionTo('view initiatives')) {
        return view('initiative.list',compact('initiatives','GoalTitle','ProjectTitle','ProjectName'));
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
        $user = Auth::user();
        $title = 'Create - initiative';

        $projects = Project::all()->pluck('project_title','id');
        if ($user->hasPermissionTo('create initiatives')) {
        return view('initiative.create',compact('title','projects'  ));
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
        $initiative = new Initiative();


        $initiative->initiative_title = $request->initiative_title;


        $initiative->initiative_description = $request->initiative_description;


        $initiative->kpi_previous = $request->kpi_previous;


        $initiative->kpi_current = $request->kpi_current;


        $initiative->kpi_target = $request->kpi_target;

        $initiative->status = "Not Accomplished";

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
        $ProjectTitle = $ProjectName->project_title;
        $GoalId = $ProjectName->goal_id;

        $GoalName = Goal::findOrfail($GoalId);
        $GoalTitle = $GoalName->goal_title;
        $user = Auth::user();
        if ($user->hasPermissionTo('view initiatives')) {
        return view('initiative.show',compact('title','initiative','action_plans','ProjectTitle','GoalTitle','BadgeColor'));
      }else{
        return view('errors.401');
      }
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $user = Auth::user();
        $title = 'Edit - initiative';
        $initiative = Initiative::findOrfail($id);
        $users = \App\User::all()->pluck('name','id');

        if($request->ajax())
        {
            if ($user->hasPermissionTo('edit initiatives')) {
            return URL::to('initiative/'. $id . '/edit');
          }else{
            return view('errors.401');
          }
        }



        $projects = Project::all()->pluck('project_title','id');

        $initiative_files = Initiative_attachment::where('initiative_id', $id)->get();

        return view('initiative.edit',compact('title','initiative' ,'projects','users','initiative_files') );
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
        $user = Auth::user();
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/initiative/'. $id . '/delete');

        if($request->ajax())
        {
            if ($user->hasPermissionTo('delete initiatives')) {
            return $msg;
          }else{
                  return view('errors.401');
          }
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
    public function addInitiativeFile(Request $request)
{
    $initiative = Initiative::findOrfail($request->initiative_id);
    $initiative_attachment = new Initiative_attachment();
    $initiative_attachment->initiative_id = $request->initiative_id;
    $file = $request->file('file_name');
    //File Name
    $filename = str_replace(' ', '_', $file->getClientOriginalName());

    //Display File Extension
    $file->getClientOriginalExtension();

    //Display File Real Path
    $file->getRealPath();

    //Display File Size
    $file->getSize();

    //Display File Mime Type
    $file->getMimeType();
    //Move Uploaded File
    $destinationPath = 'uploads';
    $file->move($destinationPath,$filename);

    // $filename = $file->getClientOriginalName();

    $initiative_attachment->file_name = str_replace(' ', '_', $filename);

    $initiative_attachment->save();
    // $action_plan->users()->syncWithoutDetaching($request->user_id);

    return redirect('initiative/'.$request->initiative_id. '/edit');
}
}
