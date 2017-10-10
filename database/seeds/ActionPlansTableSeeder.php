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
                'action_plan_approval' => 'Approved',
                'initiative_id' => 3,
                'user_id' => 1,
                'created_at' => '2017-08-02 12:40:54',
                'updated_at' => '2017-10-05 17:20:39',
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
                'action_plan_approval' => 'Approved',
                'initiative_id' => 7,
                'user_id' => 1,
                'created_at' => '2017-08-02 12:49:54',
                'updated_at' => '2017-10-09 12:30:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'action_plan_title' => 'Action Plan X',
                'action_plan_updates' => NULL,
                'action_plan_risks' => NULL,
                'action_plan_resources' => NULL,
                'action_plan_start' => '2017-10-31',
                'action_plan_end' => '2017-10-31',
                'action_plan_approval' => 'Approved',
                'initiative_id' => 3,
                'user_id' => NULL,
                'created_at' => '2017-10-05 07:59:03',
                'updated_at' => '2017-10-09 12:14:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'action_plan_title' => 'action plan 1ds',
                'action_plan_updates' => NULL,
                'action_plan_risks' => NULL,
                'action_plan_resources' => NULL,
                'action_plan_start' => '2017-10-23',
                'action_plan_end' => '2017-10-09',
                'action_plan_approval' => 'Draft',
                'initiative_id' => 3,
                'user_id' => NULL,
                'created_at' => '2017-10-09 12:25:03',
                'updated_at' => '2017-10-09 12:25:11',
                'deleted_at' => '2017-10-09 12:25:11',
            ),
            4 => 
            array (
                'id' => 6,
                'action_plan_title' => 'action plan 153213',
                'action_plan_updates' => NULL,
                'action_plan_risks' => NULL,
                'action_plan_resources' => NULL,
                'action_plan_start' => '2017-10-09',
                'action_plan_end' => '2017-10-09',
                'action_plan_approval' => 'Pending',
                'initiative_id' => 3,
                'user_id' => NULL,
                'created_at' => '2017-10-09 13:09:19',
                'updated_at' => '2017-10-09 17:11:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}