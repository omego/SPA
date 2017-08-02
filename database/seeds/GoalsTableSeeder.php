<?php

use Illuminate\Database\Seeder;

class GoalsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('goals')->delete();
        
        \DB::table('goals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'goal_title' => 'g1',
                'goal_discerption' => 'dis 1',
                'created_at' => '2017-08-02 12:15:08',
                'updated_at' => '2017-08-02 12:15:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'goal_title' => 'g2',
                'goal_discerption' => 'dis',
                'created_at' => '2017-08-02 12:15:18',
                'updated_at' => '2017-08-02 12:15:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}