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
                'initiative_title' => 'i1',
                'initiative_description' => 'dis i1',
                'kpi_previous' => '2014: 50%',
                'kpi_current' => '2015: 60%',
                'kpi_target' => '2016: 70%',
                'status' => 'Complete',
                'project_id' => 1,
                'created_at' => '2017-08-02 12:16:55',
                'updated_at' => '2017-08-07 19:45:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'initiative_title' => 'initiative 2',
                'initiative_description' => 'initiative dis 2',
                'kpi_previous' => '2013',
                'kpi_current' => '2000',
                'kpi_target' => '2000',
                'status' => 'Complete',
                'project_id' => 1,
                'created_at' => '2017-08-02 12:45:38',
                'updated_at' => '2017-08-07 17:47:57',
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
                'project_id' => 1,
                'created_at' => '2017-08-07 07:59:06',
                'updated_at' => '2017-08-07 19:45:55',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'initiative_title' => 'status test2',
                'initiative_description' => 'initiative dis 5',
                'kpi_previous' => '2013',
                'kpi_current' => '2000',
                'kpi_target' => '2015',
                'status' => 'Complete',
                'project_id' => 1,
                'created_at' => '2017-08-07 11:07:33',
                'updated_at' => '2017-08-07 11:14:57',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}