<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:20:28am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Project extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'projects';

	
	public function goal()
	{
		return $this->belongsTo('App\Goal','goal_id');
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
