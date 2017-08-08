<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Initiative_attachment.
 *
 * @author  The scaffold-interface created at 2017-08-08 07:48:12am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Initiative_attachment extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'initiative_attachments';

	
	public function initiative()
	{
		return $this->belongsTo('App\Initiative','initiative_id');
	}

	
}
