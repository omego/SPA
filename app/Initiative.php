<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Initiative.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:10:49pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Initiative extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];


    protected $table = 'initiatives';


	public function project()
	{
		return $this->belongsTo('App\Project','project_id');
	}
	public function action_plan()
	{
		return $this->hasMany('App\Action_plan','initiative_id');
	}

}
