<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goal;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Project;


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
        $title = 'Index - goal';
        $goals = Goal::paginate(6);
        return view('goal.index',compact('goals','title'));
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
        return view('goal.show',compact('title','goal'));
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
