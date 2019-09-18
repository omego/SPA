<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Action_plan_attachment;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Action_plan;


/**
 * Class Action_plan_attachmentController.
 *
 * @author  The scaffold-interface created at 2017-08-06 12:08:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Action_plan_attachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - action_plan_attachment';
        $action_plan_attachments = Action_plan_attachment::paginate(20);
        return view('action_plan_attachment.index',compact('action_plan_attachments','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - action_plan_attachment';

        $action_plans = Action_plan::all()->pluck('action_plan_title','id');

        return view('action_plan_attachment.create',compact('title','action_plans'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action_plan_attachment = new Action_plan_attachment();


        $action_plan_attachment->action_plan_id = $request->action_plan_id;


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

        $action_plan_attachment->file_name = $filename;

        $action_plan_attachment->save();

        // $pusher = App::make('pusher');
        //
        // //default pusher notification.
        // //by default channel=test-channel,event=test-event
        // //Here is a pusher notification example when you create a new resource in storage.
        // //you can modify anything you want or use it wherever.
        // $pusher->trigger('test-channel',
        //                  'test-event',
        //                 ['message' => 'A new action_plan_attachment has been created !!']);

        return redirect('action_plan_attachment');
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
        $title = 'Show - action_plan_attachment';

        if($request->ajax())
        {
            return URL::to('action_plan_attachment/'.$id);
        }

        $action_plan_attachment = Action_plan_attachment::findOrfail($id);
        return view('action_plan_attachment.show',compact('title','action_plan_attachment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - action_plan_attachment';
        if($request->ajax())
        {
            return URL::to('action_plan_attachment/'. $id . '/edit');
        }


        $action_plans = Action_plan::all()->pluck('action_plan_title','id');


        $action_plan_attachment = Action_plan_attachment::findOrfail($id);
        return view('action_plan_attachment.edit',compact('title','action_plan_attachment' ,'action_plans' ) );
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
        $action_plan_attachment = Action_plan_attachment::findOrfail($id);

        $action_plan_attachment->file_name = $request->file_name;


        $action_plan_attachment->action_plan_id = $request->action_plan_id;


        $action_plan_attachment->save();

        return redirect('action_plan_attachment');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/action_plan_attachment/'. $id . '/delete');

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
         $action_plan_attachment = Action_plan_attachment::findOrfail($id);
         //Storage::delete($action_plan_attachment->path);
     	$action_plan_attachment->delete();
        return redirect()->back(); //URL::to('action_plan_attachment');
    }
}
