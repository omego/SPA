<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Action_plan;
use App\Action_plan_attachment;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use App\Mail\ActionPlanApproved;
use App\Mail;
use App\Initiative;

use Auth;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Pusher;
use App\User;
use App\Project;
use App\Goal;


/**
 * Class Action_planController.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:38:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Action_planController extends Controller
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
        $title = 'Index - action_plan';
        $user = Auth::user();
        $userId = $user->id;
        if ($user->hasRole('Responsible')) {
          $userId = $user->id;
          $action_plans = Action_plan::where('user_id', $userId)->paginate(20);
        }elseif ($user->hasRole('Admin')) {
          $action_plans = Action_plan::paginate(20);
        }elseif ($user->hasRole('Owner')) {
          // $action_plans = Action_plan::paginate(20);
          $initiatives = Initiative::where('user_id', $userId)->paginate(20);
          foreach ($initiatives as $initiative) {
            echo $initiative->id;
            $action_plans = Initiative::find($initiative->id)->action_plan()->paginate(20);
          }

        }
        if (Auth::check()) {
          $user = Auth::user();
          $permissions = $user->permissions;
          $role = Role::where('name', 'Admin')->first();
          if ($user->hasPermissionTo('view action plans')) {
        return view('action_plan.index',compact('action_plans','title'));
      }else{
        return view('errors.401');
      }
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
        $title = 'Create - action_plan';

        $initiatives = Initiative::all()->pluck('initiative_title','id');
        if ($user->hasPermissionTo('create action plans')) {
        return view('action_plan.create',compact('title','initiatives'  ));
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

      $this->validate($request, [
      'action_plan_title' => 'required|min:5|max:191|string',
      'action_plan_start' => 'required|date',
      'action_plan_end' => 'required|date',
  ]);

        $action_plan = new Action_plan();


        $action_plan->action_plan_title = $request->action_plan_title;


        // $action_plan->action_plan_updates = $request->action_plan_updates;


        // $action_plan->action_plan_risks = $request->action_plan_risks;


        // $action_plan->action_plan_resources = $request->action_plan_resources;


        $action_plan->action_plan_start = $request->action_plan_start;


        $action_plan->action_plan_end = $request->action_plan_end;

        $action_plan->action_plan_approval = "Draft";


        // $action_plan->action_plan_approval = $request->action_plan_approval;


        $action_plan->initiative_id = $request->initiative_id;

        // $file_upload = new Action_plan_attachmentController();

        // $file_upload->file_name = $request->file('file_name');

        // $action_plan->Action_plan_attachment()->save($file_upload);



        // $file_upload = new Action_plan_attachment();

        // $file_upload->file_name = $request->file('file_name');

        // $file_upload->action_plan_id = $request->action_plan_id;

        // $file_upload->push();


        $action_plan->push();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new action_plan has been created !!']);

        return redirect('action_plan/'. $action_plan->id);
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
        $title = 'Show - action_plan';
        $user = Auth::user();

        if($request->ajax())
        {
            return URL::to('action_plan/'.$id);

        }
        $action_plan = Action_plan::findOrfail($id);
        $action_plan_title = $action_plan->action_plan_title;


        $initiative = Initiative::findOrfail($action_plan->initiative_id);
        $initiativesTitle = $initiative->initiative_title;

        $ProjectName = Project::findOrfail($initiative->project_id);
        $ProjectTitle = $ProjectName->project_title;
        $ProjectId = $ProjectName->id;
        $GoalId = $ProjectName->goal_id;

        $GoalName = Goal::findOrfail($GoalId);
        $GoalTitle = $GoalName->goal_title;
        $GoalID =  $GoalName->id;

        if (isset($action_plan->user_id)) {
          $AssignedUser = User::findOrfail($action_plan->user_id);
        }elseif (is_null($action_plan->user_id)){
          $AssignedUser = Null;
        }
        if ($user->hasPermissionTo('view action plans')) {
        return view('action_plan.show',compact('title','action_plan','AssignedUser','ProjectTitle','GoalTitle','initiativesTitle','action_plan_title','GoalID','ProjectId','initiative'));
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
        $title = 'Edit - action_plan';
        $user = Auth::user();
        $action_plan = Action_plan::findOrfail($id);
        $users = \App\User::all()->pluck('name','id');

        if($request->ajax())
        {
            if ($user->hasPermissionTo('edit action plans')) {
            return URL::to('action_plan/'. $id . '/edit');
          }else{
            return view('errors.401');
          }
        }


        $action_plan_files = Action_plan_attachment::where('action_plan_id', $id)->get();

        $initiatives = Initiative::all()->pluck('initiative_title','id');



        return view('action_plan.edit',compact('title','action_plan' ,'initiatives' ,'users','action_plan_files') );
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
        $action_plan = Action_plan::findOrfail($id);

        $action_plan->action_plan_title = $request->action_plan_title;

        $action_plan->action_plan_updates = $request->action_plan_updates;

        $action_plan->action_plan_risks = $request->action_plan_risks;

        $action_plan->action_plan_resources = $request->action_plan_resources;

        $action_plan->action_plan_start = $request->action_plan_start;

        $action_plan->action_plan_end = $request->action_plan_end;

        $action_plan->action_plan_approval = $request->action_plan_approval;

        $action_plan->user_id = empty($request->user_id) ? $action_plan->user_id : $request->user_id;

        $action_plan->initiative_id = empty($request->initiative_id) ? $action_plan->initiative_id : $request->initiative_id;

        // $action_plan_attachment = new Action_plan_attachment();
        //
        //
        // $action_plan_attachment->action_plan_id = $request->id;
        //
        //
        // $file = $request->file('file_name');
        //
        // //File Name
        // $file->getClientOriginalName();
        //
        // //Display File Extension
        // $file->getClientOriginalExtension();
        //
        // //Display File Real Path
        // $file->getRealPath();
        //
        // //Display File Size
        // $file->getSize();
        //
        // //Display File Mime Type
        // $file->getMimeType();
        //
        // //Move Uploaded File
        // $destinationPath = 'uploads';
        // $file->move($destinationPath,$file->getClientOriginalName());
        //
        // $filename = $file->getClientOriginalName();
        //
        // $action_plan_attachment->file_name = 'uploads/' . $filename;
        //
        // $action_plan_attachment->save();

        $action_plan->save();

        // \Mail::to('test@test.com')->send(new ActionPlanApproved);

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

        $data['message'] = $action_plan->action_plan_title . ' needs your approval';
        $pusher->trigger('my-channel', 'my-event', $data);

        return redirect('action_plan/'. $action_plan->id);
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/action_plan/'. $id . '/delete');

        if($request->ajax())
        {
            if ($user->hasPermissionTo('delete action plans')) {
            return $msg;
          }else{
                  return('Access Denied');
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
     	$action_plan = Action_plan::findOrfail($id);
     	$action_plan->delete();
        return URL::to('action_plan');
    }
    /**
     * upload a file to action plan
     *
     */
        public function addActionplanFile(Request $request)
    {
        $action_plan = Action_plan::findOrfail($request->action_plan_id);
        $action_plan_attachment = new Action_plan_attachment();
        $action_plan_attachment->action_plan_id = $request->action_plan_id;
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

        $action_plan_attachment->file_name = str_replace(' ', '_', $filename);

        $action_plan_attachment->save();
        // $action_plan->users()->syncWithoutDetaching($request->user_id);

        return redirect('action_plan/'.$request->action_plan_id. '/edit');
    }

    /**
     * upload a file to action plan
     *
     */
        public function ApproveActionplan(Request $request)
    {
        $action_plan = Action_plan::findOrfail($request->action_plan_id);
        if ($action_plan->action_plan_approval != 'Approved') {
          $action_plan->action_plan_approval = 'Approved';
          $action_plan->save();
          \Mail::to('test@test.com')->send(new ActionPlanApproved);
        }


        return redirect('action_plan/'.$action_plan->id);
    }
}
