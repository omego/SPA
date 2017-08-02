<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Action_plan.
 *
 * @author  The scaffold-interface created at 2017-08-02 12:38:08pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Action_plan extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'action_plans';

	
	public function initiative()
	{
		return $this->belongsTo('App\Initiative','initiative_id');
	}

	
}
