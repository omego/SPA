<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

	/**
     * goal.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function goals()
    {
        return $this->belongsToMany('App\Goal');
    }

    /**
     * Assign a goal.
     *
     * @param  $goal
     * @return  mixed
     */
    public function assignGoal($goal)
    {
        return $this->goals()->attach($goal);
    }
    /**
     * Remove a goal.
     *
     * @param  $goal
     * @return  mixed
     */
    public function removeGoal($goal)
    {
        return $this->goals()->detach($goal);
    }


	/**
     * project.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    /**
     * Assign a project.
     *
     * @param  $project
     * @return  mixed
     */
    public function assignProject($project)
    {
        return $this->projects()->attach($project);
    }
    /**
     * Remove a project.
     *
     * @param  $project
     * @return  mixed
     */
    public function removeProject($project)
    {
        return $this->projects()->detach($project);
    }
    /**
     * Get the initiatives for users.
     */
    public function initiatives()
    {
        return $this->hasMany('App\Initiative');
    }

    /**
     * Get the initiatives for users.
     */
    public function action_plans()
    {
        return $this->hasMany('App\action_plans');
    }

}
