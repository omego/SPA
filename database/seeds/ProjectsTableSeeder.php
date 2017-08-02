<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_title' => 'p1',
                'project_discerption' => 'dis p 1',
                'goal_id' => 1,
                'created_at' => '2017-08-02 12:15:37',
                'updated_at' => '2017-08-02 12:47:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'project_title' => 'p2',
                'project_discerption' => 'dis p2',
                'goal_id' => 2,
                'created_at' => '2017-08-02 12:15:49',
                'updated_at' => '2017-08-02 12:15:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}