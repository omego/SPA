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
                'remember_token' => 'JDJhqwzQ37tyc7ff5PE4EUY3HxRt1WtoJEMG7fvvlIHkLA3eRN1alxwBWdQH',
                'created_at' => '2017-08-02 08:13:42',
                'updated_at' => '2017-08-02 08:13:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'IT',
                'email' => 'mserihi@gmail.com',
                'password' => '$2y$10$RM89GYV6Kogac.oAqOuGw.u7pNoDdMlwHHL2HUyQyMafV6FB61516',
                'remember_token' => 'thmmAzGRbJ4MfTZ1CR2O1Cx7aAIQy9i0GZiMCBNUC7tLwbKhwQzcnPK8AMph',
                'created_at' => '2017-08-09 12:23:50',
                'updated_at' => '2017-10-02 07:53:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'HR',
                'email' => '123@123.com',
                'password' => '$2y$10$YHO1EK4Xv3aLg42A7QkjW.iujeYG3KbSCRkBtD51JwbW3P9r7E8b2',
                'remember_token' => 'EGWe2iK81zN5cRrLwzRSyD8pRk02YvwoiAUXovrG70DiueFdCZXyulxdX19l',
                'created_at' => '2017-08-22 16:16:44',
                'updated_at' => '2017-10-02 07:53:08',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Salman Yamani',
                'email' => 'dsadsadas@dsdsa.com',
                'password' => '$2y$10$vFbOD97hlfUG41tsyPBdEeakhzeIldvCVEiuuEanXr6WLw/DW8pQW',
                'remember_token' => NULL,
                'created_at' => '2017-09-27 11:27:31',
                'updated_at' => '2017-09-27 11:27:31',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => '$2y$10$QK2X934PI2SMORuD3/ZbbeV9DCq/BxRBLd8Dg0LzRvL5Z9As66aTq',
                'remember_token' => 'Zv6crLhJ3JT9DALVorlvkWAmSFEIzcJEXnLWid8JortJhwSPwuedOu9Na762',
                'created_at' => '2017-10-02 14:58:36',
                'updated_at' => '2017-10-02 14:58:36',
            ),
        ));
        
        
    }
}