<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 12,
                'name' => 'create goals',
                'created_at' => '2017-09-13 12:23:43',
                'updated_at' => '2017-09-13 12:23:43',
            ),
            1 => 
            array (
                'id' => 13,
                'name' => 'edit goals',
                'created_at' => '2017-09-13 12:23:48',
                'updated_at' => '2017-09-13 12:23:48',
            ),
            2 => 
            array (
                'id' => 14,
                'name' => 'view goals',
                'created_at' => '2017-09-13 12:23:55',
                'updated_at' => '2017-09-13 12:23:55',
            ),
            3 => 
            array (
                'id' => 15,
                'name' => 'delete goals',
                'created_at' => '2017-09-13 12:24:03',
                'updated_at' => '2017-09-13 12:24:03',
            ),
            4 => 
            array (
                'id' => 17,
                'name' => 'edit projects',
                'created_at' => '2017-09-26 08:07:10',
                'updated_at' => '2017-09-26 08:07:10',
            ),
            5 => 
            array (
                'id' => 18,
                'name' => 'create projects',
                'created_at' => '2017-10-02 12:49:36',
                'updated_at' => '2017-10-02 12:49:52',
            ),
            6 => 
            array (
                'id' => 19,
                'name' => 'view projects',
                'created_at' => '2017-10-02 12:50:10',
                'updated_at' => '2017-10-02 12:50:10',
            ),
            7 => 
            array (
                'id' => 20,
                'name' => 'delete projects',
                'created_at' => '2017-10-02 12:50:47',
                'updated_at' => '2017-10-02 12:50:47',
            ),
            8 => 
            array (
                'id' => 21,
                'name' => 'view initiatives',
                'created_at' => '2017-10-02 12:52:21',
                'updated_at' => '2017-10-02 12:52:21',
            ),
            9 => 
            array (
                'id' => 22,
                'name' => 'create initiatives',
                'created_at' => '2017-10-02 12:52:37',
                'updated_at' => '2017-10-02 12:52:37',
            ),
            10 => 
            array (
                'id' => 23,
                'name' => 'edit initiatives',
                'created_at' => '2017-10-02 12:52:52',
                'updated_at' => '2017-10-02 12:52:52',
            ),
            11 => 
            array (
                'id' => 24,
                'name' => 'delete initiatives',
                'created_at' => '2017-10-02 12:53:06',
                'updated_at' => '2017-10-02 12:53:06',
            ),
            12 => 
            array (
                'id' => 25,
                'name' => 'view action plans',
                'created_at' => '2017-10-02 12:53:41',
                'updated_at' => '2017-10-02 12:53:41',
            ),
            13 => 
            array (
                'id' => 26,
                'name' => 'create action plans',
                'created_at' => '2017-10-02 12:54:02',
                'updated_at' => '2017-10-02 12:54:02',
            ),
            14 => 
            array (
                'id' => 27,
                'name' => 'edit action plans',
                'created_at' => '2017-10-02 12:54:17',
                'updated_at' => '2017-10-02 12:54:17',
            ),
            15 => 
            array (
                'id' => 28,
                'name' => 'delete action plans',
                'created_at' => '2017-10-02 12:54:28',
                'updated_at' => '2017-10-02 12:54:28',
            ),
        ));
        
        
    }
}