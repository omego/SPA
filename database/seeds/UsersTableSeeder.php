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
                'remember_token' => 'zaHQskFhkDxNYIGFYv1SyXvR51AQ6CndNVopBI8z1QOR9KcLNt8ZHze98940',
                'created_at' => '2017-08-02 08:13:42',
                'updated_at' => '2017-08-02 08:13:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'IT',
                'email' => 'mserihi@gmail.com',
                'password' => '$2y$10$RM89GYV6Kogac.oAqOuGw.u7pNoDdMlwHHL2HUyQyMafV6FB61516',
                'remember_token' => 'I9xBy9ApwK0HEyhpcbNnsseoBflPSdojpHcpewSAiKzy1WB7esrnbZWySwwv',
                'created_at' => '2017-08-09 12:23:50',
                'updated_at' => '2017-10-02 07:53:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'HR',
                'email' => '123@123.com',
                'password' => '$2y$10$YHO1EK4Xv3aLg42A7QkjW.iujeYG3KbSCRkBtD51JwbW3P9r7E8b2',
                'remember_token' => '4x3esXF7AA4DvtsDY9dzjr9XCbYO6NhQYRsGGWGlyZfVEoxFosxCQG3cojkK',
                'created_at' => '2017-08-22 16:16:44',
                'updated_at' => '2017-10-02 07:53:08',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Responsible HR',
                'email' => 'Responsible@Responsible.com',
                'password' => '$2y$10$Y3W4D1axQ2kxH0zf2qtYfuABtbWasxBtwbWSrwX8mSyF7oFyL0wAS',
                'remember_token' => 'veo8SzJKnAs69oeFwAT087jn0rPUK0wBbYiRSPqjJAkXNVFEDz5ipGpe043D',
                'created_at' => '2017-09-27 11:27:31',
                'updated_at' => '2017-10-17 09:59:27',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => '$2y$10$QK2X934PI2SMORuD3/ZbbeV9DCq/BxRBLd8Dg0LzRvL5Z9As66aTq',
                'remember_token' => 'GAwS4ujqv05zXGbjBWXgrtnO2uVZaXICjoM609OstBgrr2hwdGar7OLbQDfn',
                'created_at' => '2017-10-02 14:58:36',
                'updated_at' => '2017-10-02 14:58:36',
            ),
        ));
        
        
    }
}