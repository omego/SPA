<?php

use Illuminate\Database\Seeder;

class ProjectUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project_user')->delete();
        
        \DB::table('project_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_id' => 1,
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'project_id' => 2,
                'user_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'project_id' => 1,
                'user_id' => 3,
            ),
        ));
        
        
    }
}