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
                'dod_note' => 'DOD',
                'project_id' => 1,
                'user_id' => 3,
                'created_at' => '2017-08-02 12:16:55',
                'updated_at' => '2017-10-16 16:47:09',
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
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 1,
                'user_id' => 2,
                'created_at' => '2017-08-02 12:45:38',
                'updated_at' => '2017-10-16 16:46:34',
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
                'status' => 'Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 4,
                'user_id' => 1,
                'created_at' => '2017-08-07 07:59:06',
                'updated_at' => '2017-10-16 16:55:16',
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
                'status' => 'Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 7,
                'user_id' => 1,
                'created_at' => '2017-08-09 12:27:58',
                'updated_at' => '2017-10-16 16:55:57',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'initiative_title' => 'initiative 6',
                'initiative_description' => 'dis i1',
                'kpi_previous' => '2016 | 50%',
                'kpi_current' => '2015: 60%',
                'kpi_target' => '2018 | 100%',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 7,
                'user_id' => 1,
                'created_at' => '2017-10-06 21:43:12',
                'updated_at' => '2017-10-09 11:32:54',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'initiative_title' => 'initiative 7',
                'initiative_description' => 'dis i1',
                'kpi_previous' => '2016 | 50%',
                'kpi_current' => '2015: 60%',
                'kpi_target' => '2018 | 100%',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 1,
                'user_id' => NULL,
                'created_at' => '2017-10-06 21:43:38',
                'updated_at' => '2017-10-09 12:22:23',
                'deleted_at' => '2017-10-09 12:22:23',
            ),
            7 => 
            array (
                'id' => 10,
                'initiative_title' => 'initiative 7',
                'initiative_description' => '8',
                'kpi_previous' => '2016 | 50%',
                'kpi_current' => '2017 | 60%',
                'kpi_target' => '2018 | 100%',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 4,
                'user_id' => NULL,
                'created_at' => '2017-10-16 17:01:23',
                'updated_at' => '2017-10-16 17:01:23',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 15,
                'initiative_title' => 'initiative 198776',
                'initiative_description' => 'Continuous review of curricular outcomes, course content, and modes of instructional delivery and sequencing and continuous assessment of student learning',
                'kpi_previous' => '2016 | 50%',
                'kpi_current' => '2017 | 60%',
                'kpi_target' => '2018 | 100%',
                'status' => 'Not Accomplished',
                'why_if_not' => NULL,
                'dod_note' => NULL,
                'project_id' => 2,
                'user_id' => NULL,
                'created_at' => '2017-10-17 12:27:55',
                'updated_at' => '2017-10-17 12:27:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}