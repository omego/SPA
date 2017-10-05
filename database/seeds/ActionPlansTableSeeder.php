<?php

use Illuminate\Database\Seeder;

class ActionPlansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('action_plans')->delete();
        
        \DB::table('action_plans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'action_plan_title' => 'Action Plan 1',
                'action_plan_updates' => 'update 1',
                'action_plan_risks' => 'risk 1',
                'action_plan_resources' => 'resource 11',
                'action_plan_start' => '2017-08-10',
                'action_plan_end' => '2017-08-12',
                'action_plan_approval' => 'Pending',
                'initiative_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-08-02 12:40:54',
                'updated_at' => '2017-10-04 13:41:43',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'action_plan_title' => 'action plan 2',
                'action_plan_updates' => 'update 2',
                'action_plan_risks' => 'risk 2',
                'action_plan_resources' => 'resource 2',
                'action_plan_start' => '2017-08-02',
                'action_plan_end' => '2017-08-03',
                'action_plan_approval' => NULL,
                'initiative_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-08-02 12:49:54',
                'updated_at' => '2017-10-04 12:41:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}