<?php

use Illuminate\Database\Seeder;

class UserHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_has_permissions')->delete();
        
        \DB::table('user_has_permissions')->insert(array (
            0 => 
            array (
                'user_id' => 5,
                'permission_id' => 12,
            ),
            1 => 
            array (
                'user_id' => 5,
                'permission_id' => 13,
            ),
            2 => 
            array (
                'user_id' => 5,
                'permission_id' => 14,
            ),
            3 => 
            array (
                'user_id' => 5,
                'permission_id' => 18,
            ),
            4 => 
            array (
                'user_id' => 5,
                'permission_id' => 19,
            ),
            5 => 
            array (
                'user_id' => 5,
                'permission_id' => 20,
            ),
            6 => 
            array (
                'user_id' => 5,
                'permission_id' => 21,
            ),
            7 => 
            array (
                'user_id' => 5,
                'permission_id' => 22,
            ),
            8 => 
            array (
                'user_id' => 5,
                'permission_id' => 23,
            ),
            9 => 
            array (
                'user_id' => 5,
                'permission_id' => 25,
            ),
            10 => 
            array (
                'user_id' => 5,
                'permission_id' => 27,
            ),
        ));
        
        
    }
}