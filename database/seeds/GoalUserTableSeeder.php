<?php

use Illuminate\Database\Seeder;

class GoalUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('goal_user')->delete();
        
        \DB::table('goal_user')->insert(array (
            0 => 
            array (
                'id' => 10,
                'goal_id' => 2,
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 11,
                'goal_id' => 2,
                'user_id' => 3,
            ),
            2 => 
            array (
                'id' => 29,
                'goal_id' => 3,
                'user_id' => 1,
            ),
            3 => 
            array (
                'id' => 30,
                'goal_id' => 3,
                'user_id' => 3,
            ),
            4 => 
            array (
                'id' => 31,
                'goal_id' => 1,
                'user_id' => 2,
            ),
            5 => 
            array (
                'id' => 34,
                'goal_id' => 1,
                'user_id' => 1,
            ),
            6 => 
            array (
                'id' => 35,
                'goal_id' => 1,
                'user_id' => 3,
            ),
        ));
        
        
    }
}