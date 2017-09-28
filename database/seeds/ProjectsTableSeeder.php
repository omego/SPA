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
                'project_title' => 'Project 1.a',
                'project_discerption' => 'Ensure systematic instructional program review.',
                'goal_id' => 1,
                'created_at' => '2017-08-02 12:15:37',
                'updated_at' => '2017-08-13 11:28:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'project_title' => 'Project1.b',
                'project_discerption' => 'Develop and/or expand academic programs in areas of assessed need and opportunity.',
                'goal_id' => 6,
                'created_at' => '2017-08-02 12:15:49',
                'updated_at' => '2017-08-12 13:26:48',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'project_title' => 'Project1.c',
                'project_discerption' => 'Promote and develop interprofessional education, training, and practice',
                'goal_id' => 3,
                'created_at' => '2017-08-09 10:32:59',
                'updated_at' => '2017-08-12 13:26:32',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'project_title' => 'Project 1.d',
                'project_discerption' => 'Ensure that student research is integrated into all academic programs.',
                'goal_id' => 1,
                'created_at' => '2017-08-09 10:33:11',
                'updated_at' => '2017-08-10 06:06:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'project_title' => 'Project1.e',
                'project_discerption' => 'Operationalize the Clinical Skills Simulation Center to serve all academic programs.',
                'goal_id' => 1,
                'created_at' => '2017-08-09 11:46:36',
                'updated_at' => '2017-08-10 06:06:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'project_title' => 'Project1.f',
                'project_discerption' => 'Create postgraduate training programs for health professions, and enhance the excellence of existing programs.',
                'goal_id' => 1,
                'created_at' => '2017-08-09 11:59:58',
                'updated_at' => '2017-08-10 06:07:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'project_title' => 'Project 1.g',
                'project_discerption' => 'Enhanced University ranking among international Universities',
                'goal_id' => 2,
                'created_at' => '2017-08-09 12:26:41',
                'updated_at' => '2017-08-11 17:50:47',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'project_title' => 'Project 9',
                'project_discerption' => '123',
                'goal_id' => 5,
                'created_at' => '2017-08-16 06:45:51',
                'updated_at' => '2017-08-16 11:21:58',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'project_title' => 'p 3',
                'project_discerption' => 'sadsa',
                'goal_id' => 1,
                'created_at' => '2017-09-19 10:54:27',
                'updated_at' => '2017-09-19 10:54:27',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}