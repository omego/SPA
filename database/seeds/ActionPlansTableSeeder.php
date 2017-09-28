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
                'action_plan_title' => 'action plan 1',
                'action_plan_updates' => 'update 1',
                'action_plan_risks' => 'risk 1',
                'action_plan_resources' => 'resource 11',
                'action_plan_start' => '2017-08-10',
                'action_plan_end' => '2017-08-11',
                'action_plan_approval' => 'Yes',
                'initiative_id' => 7,
                'user_id' => 2,
                'created_at' => '2017-08-02 12:40:54',
                'updated_at' => '2017-09-25 08:02:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'action_plan_title' => 'action 2',
                'action_plan_updates' => 'update 2',
                'action_plan_risks' => 'risk 2',
                'action_plan_resources' => 'resource 2',
                'action_plan_start' => '2017-08-02',
                'action_plan_end' => '2017-08-03',
                'action_plan_approval' => 'yes',
                'initiative_id' => 4,
                'user_id' => NULL,
                'created_at' => '2017-08-02 12:49:54',
                'updated_at' => '2017-08-02 12:49:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'action_plan_title' => 'action 3',
                'action_plan_updates' => NULL,
                'action_plan_risks' => NULL,
                'action_plan_resources' => NULL,
                'action_plan_start' => '2017-08-08',
                'action_plan_end' => '2017-08-03',
                'action_plan_approval' => NULL,
                'initiative_id' => 3,
                'user_id' => NULL,
                'created_at' => '2017-08-08 10:39:22',
                'updated_at' => '2017-08-08 10:39:22',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'action_plan_title' => 'action 25',
                'action_plan_updates' => 'fdsfsd',
                'action_plan_risks' => 'fds',
                'action_plan_resources' => 'gfds',
                'action_plan_start' => '2017-08-08',
                'action_plan_end' => '2017-08-03',
                'action_plan_approval' => 'yes',
                'initiative_id' => 3,
                'user_id' => NULL,
                'created_at' => '2017-08-09 12:29:25',
                'updated_at' => '2017-08-09 12:32:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}