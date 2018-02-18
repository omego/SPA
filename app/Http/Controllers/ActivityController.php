<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Activitylog\Models\Activity;

use Auth;

use Illuminate\Support\Facades\DB;
// use Pusher;
use App\User;
// use App\Project;
// use App\Goal;

class ActivityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $activity = Activity::all()->last()->paginate(20);

      return view('activity.index', compact('activity'));
    }
}
