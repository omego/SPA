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
                'initiative_title' => 'Initiative 1',
                'initiative_description' => 'Continuous review of curricular outcomes, course content, and modes of instructional delivery and sequencing and continuous assessment of student learning',
                'kpi_previous' => '2016 | 50%',
                'kpi_current' => '2017 | 60%',
                'kpi_target' => '2018 | 100%',
                'status' => 'Accomplished',
                'why_if_not' => 'why?',
                'dod_note' => 'Hello, I\'m DOD',
                'project_id' => 1,
                'user_id' => 1,
                'created_at' => '2017-08-02 12:16:55',
                'updated_at' => '2017-10-04 12:48:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'initiative_title' => 'initiative 2',
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
                'initiative_title' => 'initiative 3',
                'initiative_description' => 'initiative dis 3',
                'kpi_previous' => '2014: 50%',
                'kpi_current' => '2000',
                'kpi_target' => '2016: 70%',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 4,
                'user_id' => 1,
                'created_at' => '2017-08-07 07:59:06',
                'updated_at' => '2017-10-02 11:38:09',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'initiative_title' => 'initiative 4',
                'initiative_description' => 'initiative dis 5',
                'kpi_previous' => '2013',
                'kpi_current' => '2000',
                'kpi_target' => '2015',
                'status' => 'Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 5,
                'user_id' => 1,
                'created_at' => '2017-08-07 11:07:33',
                'updated_at' => '2017-10-02 11:38:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'initiative_title' => 'initiative 5',
                'initiative_description' => 'test',
                'kpi_previous' => '54',
                'kpi_current' => '76',
                'kpi_target' => '56',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 7,
                'user_id' => 1,
                'created_at' => '2017-08-09 12:27:58',
                'updated_at' => '2017-10-02 11:38:54',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}