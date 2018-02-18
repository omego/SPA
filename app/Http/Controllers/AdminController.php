<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;

use Auth;

use Illuminate\Support\Facades\DB;
// use Pusher;
use App\User;
// use App\Project;
// use App\Goal;


/**
 * Class Action_planController.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:38:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AdminController extends Controller
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
        $users = \App\User::whereNotIn('id', [1, 2])
                  ->get();

         return view('admin.index', compact('users'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
     public function create()
     {
         return view('admin.create');
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
       'email' => 'unique:users,email|required|max:191|string|email',
       'name' => 'required|max:191|string',
       'password' => 'required|min:6|string',
       ]);
         $user = new \App\User();

         $user->email = $request->email;
         $user->name = $request->name;
         $user->password = Hash::make($request->password);
         // $user->password = empty($request->password) ? $user->password : Hash::make($request->password);

         $user->save();

         return redirect('admin');
     }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
     public function edit($id)
     {
         $user = \App\User::whereNotIn('id', [1, 2])->findOrfail($id);
         $roles = Role::all()->pluck('name');
        // $permissions = Permission::all()->pluck('name');
         $userRoles = $user->roles;
      //   $userPermissions = $user->permissions;

         return view('admin.edit', compact('user', 'roles', 'userRoles'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param \Illuminate\Http\Request $request
      *
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request)
     {

       $this->validate($request, [
       'email' => [
         'required',
       Rule::unique('users')->ignore($request->user_id),
        'email',
        'max:191',
        'string',
     ],
       'name' => 'required|max:191|string',
       'password' => 'required|min:6|string',
       ]);
         $user = \App\User::findOrfail($request->user_id);

         $user->email = $request->email;
         $user->name = $request->name;
         $user->password = Hash::make($request->password);

         $user->save();

         return redirect('admin');
     }

     /**
      * Assign Role to user.
      *
      * @param \Illuminate\Http\Request
      *
      * @return \Illuminate\Http\Response
      */
     public function addRole(Request $request)
     {
         $user = \App\User::findOrfail($request->user_id);
         $roles = Role::all()->pluck('name');
         $userRoles = $user->roles;
         $user->assignRole($request->role_name);

         return redirect('admin/'.$request->user_id.'/edit');
     }

     /**
      * revoke Role to a a user.
      *
      * @param \Illuminate\Http\Request
      *
      * @return \Illuminate\Http\Response
      */
     public function revokeRole($role, $user_id)
     {
         $user = \App\User::findorfail($user_id);

         $user->removeRole(str_slug($role, ' '));

         return redirect('admin/'.$request->user_id.'/edit');
     }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */


    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param    \Illuminate\Http\Request  $request
    //  * @param    int  $id
    //  * @return  \Illuminate\Http\Response
    //  */
    // public function update($id,Request $request)
    // {
    //     $action_plan = Action_plan::findOrfail($id);
    //
    //     $action_plan->action_plan_title = $request->action_plan_title;
    //
    //     $action_plan->action_plan_updates = $request->action_plan_updates;
    //
    //     $action_plan->action_plan_risks = $request->action_plan_risks;
    //
    //     $action_plan->action_plan_resources = $request->action_plan_resources;
    //
    //     $action_plan->action_plan_start = $request->action_plan_start;
    //
    //     $action_plan->action_plan_end = $request->action_plan_end;
    //
    //     $action_plan->action_plan_approval = $request->action_plan_approval;
    //
    //     $action_plan->user_id = empty($request->user_id) ? $action_plan->user_id : $request->user_id;
    //
    //     $action_plan->initiative_id = empty($request->initiative_id) ? $action_plan->initiative_id : $request->initiative_id;
    //
    //     $initiative = Initiative::findOrfail($action_plan->initiative_id);
    //     $initiativesTitle = $initiative->initiative_title;
    //     $initiativesOwnerId = $initiative->user_id;
    //     $initiativesOwnerEmail = User::findOrfail($initiativesOwnerId);
    //     $DodEmail = "spa@ksau-hs.edu.sa";
    //
    //     if ($action_plan->action_plan_approval == 'Pending') {
    //       \Mail::to($initiativesOwnerEmail->email)->send(new ActionPlanOwnerApproval($action_plan));
    //     }
    //     elseif ($action_plan->action_plan_approval == 'Approved by Owner') {
    //       \Mail::to($DodEmail)->send(new ActionPlanDODApproval($action_plan));
    //     }
    //
    //     $action_plan->save();
    //
    //     // $options = array(
    //     //   'cluster' => 'ap2',
    //     //   'encrypted' => true
    //     // );
    //     // $pusher = new Pusher(
    //     //   env("PUSHER_APP_KEY"),
    //     //   env("PUSHER_APP_SECRET"),
    //     //   env("PUSHER_APP_ID"),
    //     //   $options
    //     // );
    //     //
    //     // $data['message'] = $action_plan->action_plan_title . ' needs your approval';
    //     // $pusher->trigger('my-channel', 'my-event', $data);
    //
    //     return redirect('action_plan/'. $action_plan->id);
    // }

    // /**
    //  * Delete confirmation message by Ajaxis.
    //  *
    //  * @link      https://github.com/amranidev/ajaxis
    //  * @param    \Illuminate\Http\Request  $request
    //  * @return  String
    //  */
    // public function DeleteMsg($id,Request $request)
    // {
    //     $user = Auth::user();
    //     $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/action_plan/'. $id . '/delete');
    //
    //     if($request->ajax())
    //     {
    //         if ($user->hasPermissionTo('delete action plans')) {
    //         return $msg;
    //       }else{
    //               return('Access Denied');
    //       }
    //     }
    //   }
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param    int $id
    //  * @return  \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //  	$action_plan = Action_plan::findOrfail($id);
    //  	$action_plan->delete();
    //     return URL::to('action_plan');
    // }
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
        $DodEmail = "spa@ksau-hs.edu.sa";
        if ($action_plan->action_plan_approval != 'Approved by Owner') {
          $action_plan->action_plan_approval = 'Approved by Owner';
          $action_plan->save();
          \Mail::to($DodEmail)->send(new ActionPlanDODApproval($action_plan));
        }elseif ($action_plan->action_plan_approval == 'Approved by Owner') {
                  $action_plan->action_plan_approval = 'Approved by DOD';
                  $action_plan->save();
          // \Mail::to('dod@test.com')->send(new ActionPlanDODApproval($action_plan));
        }


        return redirect('action_plan/'.$action_plan->id);
    }
}
