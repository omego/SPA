<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

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
	protected $guard_name = 'web'; // or whatever guard you want to use

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'goals';

    public function initiatives()
    {
    	return $this->hasManyThrough('App\Initiative','App\Project');
    }
	
}
