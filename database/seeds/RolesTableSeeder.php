<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'SuperAdmin',
                'created_at' => '2017-08-22 16:15:13',
                'updated_at' => '2017-08-22 16:15:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Admin',
                'created_at' => '2017-08-22 16:15:42',
                'updated_at' => '2017-09-13 12:40:08',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Owner',
                'created_at' => '2017-08-22 16:15:56',
                'updated_at' => '2017-08-22 16:15:56',
            ),
        ));
        
        
    }
}