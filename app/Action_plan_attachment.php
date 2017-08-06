<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Action_plan_attachment.
 *
 * @author  The scaffold-interface created at 2017-08-06 12:08:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Action_plan_attachment extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'action_plan_attachments';

	
	public function action_plan()
	{
		return $this->belongsTo('App\Action_plan','action_plan_id');
	}

	
}
