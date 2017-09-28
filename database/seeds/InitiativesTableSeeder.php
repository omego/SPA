<?php

use Illuminate\Database\Seeder;

class InitiativesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiatives')->delete();
        
        \DB::table('initiatives')->insert(array (
            0 => 
            array (
                'id' => 3,
                'initiative_title' => 'initiative i',
                'initiative_description' => 'Continuous review of curricular outcomes, course content, and modes of instructional delivery and sequencing and continuous assessment of student learning',
                'kpi_previous' => '2014: 50%',
                'kpi_current' => '2015: 60%',
                'kpi_target' => '2016: 100%',
                'status' => 'Accomplished',
                'why_if_not' => 'why?',
                'dod_note' => 'Hello, I\'m DOD',
                'project_id' => 2,
                'user_id' => 3,
                'created_at' => '2017-08-02 12:16:55',
                'updated_at' => '2017-09-25 07:59:16',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'initiative_title' => 'initiative ii',
                'initiative_description' => 'ii. Develop OSCEs for competency-based assessment',
                'kpi_previous' => '2013',
                'kpi_current' => '2000',
                'kpi_target' => '2000',
                'status' => 'Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 1,
                'user_id' => NULL,
                'created_at' => '2017-08-02 12:45:38',
                'updated_at' => '2017-08-17 11:40:43',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'initiative_title' => 'status test',
                'initiative_description' => 'initiative dis 3',
                'kpi_previous' => '2014: 50%',
                'kpi_current' => '2000',
                'kpi_target' => '2016: 70%',
                'status' => NULL,
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 1,
                'user_id' => NULL,
                'created_at' => '2017-08-07 07:59:06',
                'updated_at' => '2017-08-08 07:54:25',
                'deleted_at' => '2017-08-08 07:54:25',
            ),
            3 => 
            array (
                'id' => 6,
                'initiative_title' => 'status test2',
                'initiative_description' => 'initiative dis 5',
                'kpi_previous' => '2013',
                'kpi_current' => '2000',
                'kpi_target' => '2015',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 1,
                'user_id' => NULL,
                'created_at' => '2017-08-07 11:07:33',
                'updated_at' => '2017-08-17 11:51:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'initiative_title' => 'initiative 22',
                'initiative_description' => 'test',
                'kpi_previous' => '54',
                'kpi_current' => '76',
                'kpi_target' => '56',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 4,
                'user_id' => NULL,
                'created_at' => '2017-08-09 12:27:58',
                'updated_at' => '2017-08-16 06:45:07',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'initiative_title' => 'initiative count',
                'initiative_description' => '123',
                'kpi_previous' => '2013',
                'kpi_current' => '2015: 60%',
                'kpi_target' => '2016',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 9,
                'user_id' => NULL,
                'created_at' => '2017-08-16 06:46:18',
                'updated_at' => '2017-08-16 07:29:30',
                'deleted_at' => '2017-08-16 07:29:30',
            ),
            6 => 
            array (
                'id' => 9,
                'initiative_title' => 'initiative count 12',
                'initiative_description' => '32',
                'kpi_previous' => '2014',
                'kpi_current' => '2015: 60%',
                'kpi_target' => '2016',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 9,
                'user_id' => NULL,
                'created_at' => '2017-08-16 06:47:21',
                'updated_at' => '2017-08-16 11:11:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}