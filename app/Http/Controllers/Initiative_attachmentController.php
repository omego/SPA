<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Initiative_attachment;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Initiative;


/**
 * Class Initiative_attachmentController.
 *
 * @author  The scaffold-interface created at 2017-08-08 07:48:12am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Initiative_attachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - initiative_attachment';
        $initiative_attachments = Initiative_attachment::paginate(20);
        return view('initiative_attachment.index',compact('initiative_attachments','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - initiative_attachment';
        
        $initiatives = Initiative::all()->pluck('initiative_title','id');
        
        return view('initiative_attachment.create',compact('title','initiatives'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $initiative_attachment = new Initiative_attachment();

        
        $initiative_attachment->file_name = $request->file_name;

        
        
        $initiative_attachment->initiative_id = $request->initiative_id;

        
        $initiative_attachment->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new initiative_attachment has been created !!']);

        return redirect('initiative_attachment');
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
        $title = 'Show - initiative_attachment';

        if($request->ajax())
        {
            return URL::to('initiative_attachment/'.$id);
        }

        $initiative_attachment = Initiative_attachment::findOrfail($id);
        return view('initiative_attachment.show',compact('title','initiative_attachment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - initiative_attachment';
        if($request->ajax())
        {
            return URL::to('initiative_attachment/'. $id . '/edit');
        }

        
        $initiatives = Initiative::all()->pluck('initiative_title','id');

        
        $initiative_attachment = Initiative_attachment::findOrfail($id);
        return view('initiative_attachment.edit',compact('title','initiative_attachment' ,'initiatives' ) );
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
        $initiative_attachment = Initiative_attachment::findOrfail($id);
    	
        $initiative_attachment->file_name = $request->file_name;
        
        
        $initiative_attachment->initiative_id = $request->initiative_id;

        
        $initiative_attachment->save();

        return redirect('initiative_attachment');
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
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/initiative_attachment/'. $id . '/delete');

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
     	$initiative_attachment = Initiative_attachment::findOrfail($id);
     	$initiative_attachment->delete();
        return URL::to('initiative_attachment');
    }
}
