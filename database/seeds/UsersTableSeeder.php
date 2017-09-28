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
                'remember_token' => 'evGaxn1rifsyAwvJVzICtkCh9jzD3eAFfMlAzY5sezydI6hIuZxn5ERU4TAN',
                'created_at' => '2017-08-02 08:13:42',
                'updated_at' => '2017-08-02 08:13:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'moayad',
                'email' => 'mserihi@gmail.com',
                'password' => '$2y$10$4/HLYkYbK0Xt8xcgUqLOyOPn0.LNGsuHvTJH.XcTC3MBC92prYkne',
                'remember_token' => 'OWceCnlFs8x17KwSrTz8h583GfLnzRWJQOfZ4pvKUWOMEMh6NLML6vwT8T7n',
                'created_at' => '2017-08-09 12:23:50',
                'updated_at' => '2017-08-09 12:23:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'test',
                'email' => '123@123.com',
                'password' => '$2y$10$q1uhieI6t1Jc9pIB54UOQ.EEXIhpDfCkSJUzCTq2LbaYw4r3LA5CG',
                'remember_token' => 'EGWe2iK81zN5cRrLwzRSyD8pRk02YvwoiAUXovrG70DiueFdCZXyulxdX19l',
                'created_at' => '2017-08-22 16:16:44',
                'updated_at' => '2017-08-22 16:16:44',
            ),
        ));
        
        
    }
}