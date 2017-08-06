<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2015_10_31_162633_scaffoldinterfaces',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2017_08_01_112630_create_permission_tables',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 11,
                'migration' => '2017_08_02_111816_goals',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 12,
                'migration' => '2017_08_02_112028_projects',
                'batch' => 3,
            ),
            6 => 
            array (
                'id' => 14,
                'migration' => '2017_08_02_121049_initiatives',
                'batch' => 4,
            ),
            7 => 
            array (
                'id' => 15,
                'migration' => '2017_08_02_123808_action_plans',
                'batch' => 5,
            ),
        ));
        
        
    }
}