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
        ));
        
        
    }
}