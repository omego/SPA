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
                'id' => 39,
                'goal_id' => 1,
                'user_id' => 2,
            ),
            1 => 
            array (
                'id' => 40,
                'goal_id' => 1,
                'user_id' => 3,
            ),
            2 => 
            array (
                'id' => 41,
                'goal_id' => 2,
                'user_id' => 3,
            ),
            3 => 
            array (
                'id' => 42,
                'goal_id' => 1,
                'user_id' => 1,
            ),
            4 => 
            array (
                'id' => 43,
                'goal_id' => 1,
                'user_id' => 4,
            ),
            5 => 
            array (
                'id' => 44,
                'goal_id' => 1,
                'user_id' => 5,
            ),
        ));
        
        
    }
}