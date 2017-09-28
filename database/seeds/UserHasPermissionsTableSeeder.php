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
                'user_id' => 1,
                'permission_id' => 12,
            ),
            1 => 
            array (
                'user_id' => 2,
                'permission_id' => 12,
            ),
            2 => 
            array (
                'user_id' => 1,
                'permission_id' => 13,
            ),
            3 => 
            array (
                'user_id' => 3,
                'permission_id' => 13,
            ),
            4 => 
            array (
                'user_id' => 1,
                'permission_id' => 14,
            ),
            5 => 
            array (
                'user_id' => 2,
                'permission_id' => 14,
            ),
            6 => 
            array (
                'user_id' => 3,
                'permission_id' => 14,
            ),
            7 => 
            array (
                'user_id' => 1,
                'permission_id' => 15,
            ),
        ));
        
        
    }
}