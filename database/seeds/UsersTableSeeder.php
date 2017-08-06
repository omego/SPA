<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ssy3',
                'email' => 'ssy.vip@gmail.com',
                'password' => '$2y$10$WnGXtrE04Yvt4pCz/Ztriuumg8Ri/f6hJ6hkEViCijJTveL92.6Ta',
                'remember_token' => 'TcpSaI4D8zLHDuPSkAQjQ33l4mWrmHPW9PxZwHSLG108hRCCkRJBwvpAtXYL',
                'created_at' => '2017-08-02 08:13:42',
                'updated_at' => '2017-08-02 08:13:42',
            ),
        ));
        
        
    }
}