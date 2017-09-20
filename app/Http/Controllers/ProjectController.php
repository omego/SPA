<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Auth;

use App\Goal;


/**
 * Class ProjectController.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:20:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '> Index - project';
        $projects = Project::paginate(6);
        return view('project.index',compact('projects','title'));
    }
    public function list($id,Request $request)
    {
        // $title = 'list - project';
        $projects = Project::where('goal_id', $id)->paginate(6);
        $GoalName = Goal::findOrfail($id);
        $GoalTitle = '> ' . $GoalName->goal_title;
        return view('project.list',compact('projects','GoalTitle'));
        //return view('scaffold-interface.layouts.defaultMaterialize',compact('GoalTitle','title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - project';

        $goals = Goal::all()->pluck('goal_title','id');

        return view('project.create',compact('title','goals'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();


        $project->project_title = $request->project_title;


        $project->project_discerption = $request->project_discerption;



        $project->goal_id = $request->goal_id;


        $project->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new project has been created !!']);

        return redirect('project');
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
        $title = 'Show - project';

        if($request->ajax())
        {
            return URL::to('initiative/list/'.$id);
        }

        $project = Project::findOrfail($id);
        return view('project.show',compact('title','project'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - project';
        $users = \App\User::all();

        if($request->ajax())
        {
            return URL::to('project/'. $id . '/edit');
        }


        $goals = Goal::all()->pluck('goal_title','id');

        $user = Auth::user();
        $project = Project::findOrfail($id);

        $userProjects = $project->users;
        if ($user->hasPermissionTo('edit projects')) {
            return view('project.edit',compact('title','project' ,'goals' ,'users','userProjects'));
        }else{
            return view('errors.401');
        }

        // $project = Project::findOrfail($id);
        // return view('project.edit',compact('title','project' ,'goals' ,'users','userProject' ) );
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
        $project = Project::findOrfail($id);

        $project->project_title = $request->project_title;

        $project->project_discerption = $request->project_discerption;


        $project->goal_id = $request->goal_id;


        $project->save();

        return redirect('project');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/project/'. $id . '/delete');

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
     	$project = Project::findOrfail($id);
     	$project->delete();
        return URL::to('project');
    }

    /**
     * Assign users to projects
     *
     */
        public function addUserProjects(Request $request)
    {
        $project = Project::findorfail($request->project_id);
        // $user = User::findorfail($request->user_id);
        $project->users()->syncWithoutDetaching($request->user_id);

        // $user = \App\User::findorfail($request->user_id);
        // $user->givePermissionTo($request->permission_name);

        return redirect('project/'.$request->project_id. '/edit');
    }

    /**
     * Remove assigned users to projects
     *
     */
        public function removeUserProjects($user_id, $project_id)
    {
        $project = Project::findorfail($project_id);

        $project->users()->detach($user_id);

        return redirect('project/'.$project_id.'/edit');
    }
}
