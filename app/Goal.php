<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Goal.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:18:16am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Goal extends Model
{

	use SoftDeletes;
	use HasRoles;
	use LogsActivity;

	protected $guard_name = 'web'; // or whatever guard you want to use

	protected $dates = ['deleted_at'];

    protected $table = 'goals';

		protected static $logAttributes = ['goal_title', 'goal_description'];

    public function initiatives()
    {
    	return $this->hasManyThrough('App\Initiative','App\Project');
    }


	/**
     * user.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * Assign a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function assignUser($user)
    {
        return $this->users()->attach($user);
    }
    /**
     * Remove a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function removeUser($user)
    {
        return $this->users()->detach($user);
    }

}
