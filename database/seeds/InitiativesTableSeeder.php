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
                'kpi_previous' => 2014,
                'kpi_current' => 2015,
                'kpi_target' => 2016,
                'project_id' => 1,
                'created_at' => '2017-08-02 12:16:55',
                'updated_at' => '2017-08-02 12:16:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'initiative_title' => 'initiative 2',
                'initiative_description' => 'initiative dis 2',
                'kpi_previous' => 2013,
                'kpi_current' => 2000,
                'kpi_target' => 2000,
                'project_id' => 1,
                'created_at' => '2017-08-02 12:45:38',
                'updated_at' => '2017-08-02 12:45:38',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}