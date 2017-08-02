<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Goal.
 *
 * @author  The scaffold-interface created at 2017-08-02 11:18:16am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Goal extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'goals';

	
}
