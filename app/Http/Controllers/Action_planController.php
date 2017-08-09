<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Action_plan;
use App\Action_plan_attachment;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Initiative;


/**
 * Class Action_planController.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:38:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Action_planController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - action_plan';
        $action_plans = Action_plan::paginate(6);
        return view('action_plan.index',compact('action_plans','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - action_plan';
        
        $initiatives = Initiative::all()->pluck('initiative_title','id');
        
        return view('action_plan.create',compact('title','initiatives'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action_plan = new Action_plan();

        
        $action_plan->action_plan_title = $request->action_plan_title;

        
        // $action_plan->action_plan_updates = $request->action_plan_updates;

        
        // $action_plan->action_plan_risks = $request->action_plan_risks;

        
        // $action_plan->action_plan_resources = $request->action_plan_resources;

        
        $action_plan->action_plan_start = $request->action_plan_start;

        
        $action_plan->action_plan_end = $request->action_plan_end;

        
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

        return redirect('action_plan');
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

        if($request->ajax())
        {
            return URL::to('action_plan/'.$id);
        }

        $action_plan = Action_plan::findOrfail($id);
        return view('action_plan.show',compact('title','action_plan'));
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
        if($request->ajax())
        {
            return URL::to('action_plan/'. $id . '/edit');
        }

        
        $initiatives = Initiative::all()->pluck('initiative_title','id');

        
        $action_plan = Action_plan::findOrfail($id);
        return view('action_plan.edit',compact('title','action_plan' ,'initiatives' ) );
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
        
        
        $action_plan->initiative_id = $request->initiative_id;

        $action_plan_attachment = new Action_plan_attachment();
        
        
        $action_plan_attachment->action_plan_id = $request->id;


        $file = $request->file('file_name');

        //File Name
        $file->getClientOriginalName();

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
        $file->move($destinationPath,$file->getClientOriginalName());

        $filename = $file->getClientOriginalName();
        
        $action_plan_attachment->file_name = 'uploads/' . $filename;

        $action_plan_attachment->save();
        
        $action_plan->save();

        return redirect('action_plan');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/action_plan/'. $id . '/delete');

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
     	$action_plan = Action_plan::findOrfail($id);
     	$action_plan->delete();
        return URL::to('action_plan');
    }
}
