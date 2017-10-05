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
                'project_title' => 'Project 1',
                'project_discerption' => 'Ensure systematic instructional program review.Ensure systematic instructional program review.Ensure systematic instructional program review.',
                'goal_id' => 1,
                'created_at' => '2017-08-02 12:15:37',
                'updated_at' => '2017-10-04 17:39:32',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'project_title' => 'Project 2',
                'project_discerption' => 'Develop and/or expand academic programs in areas of assessed need and opportunity.',
                'goal_id' => 1,
                'created_at' => '2017-08-02 12:15:49',
                'updated_at' => '2017-08-12 13:26:48',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'project_title' => 'Project 3',
                'project_discerption' => 'Promote and develop interprofessional education, training, and practice',
                'goal_id' => 2,
                'created_at' => '2017-08-09 10:32:59',
                'updated_at' => '2017-10-02 11:35:35',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'project_title' => 'Project 4',
                'project_discerption' => 'Ensure that student research is integrated into all academic programs.',
                'goal_id' => 2,
                'created_at' => '2017-08-09 10:33:11',
                'updated_at' => '2017-10-02 11:35:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'project_title' => 'Project 5',
                'project_discerption' => 'Operationalize the Clinical Skills Simulation Center to serve all academic programs.',
                'goal_id' => 2,
                'created_at' => '2017-08-09 11:46:36',
                'updated_at' => '2017-10-02 11:36:04',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'project_title' => 'Project 6',
                'project_discerption' => 'Create postgraduate training programs for health professions, and enhance the excellence of existing programs.',
                'goal_id' => 3,
                'created_at' => '2017-08-09 11:59:58',
                'updated_at' => '2017-10-02 11:35:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}