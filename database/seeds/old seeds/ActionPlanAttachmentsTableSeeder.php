<?php

use Illuminate\Database\Seeder;

class ActionPlanAttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('action_plan_attachments')->delete();
        
        \DB::table('action_plan_attachments')->insert(array (
            0 => 
            array (
                'id' => 7,
                'file_name' => 'uploads/Screenshot 2017-08-29 20.44.00 copy.jpg',
                'action_plan_id' => 3,
                'created_at' => '2017-09-17 05:43:37',
                'updated_at' => '2017-09-17 05:43:37',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 12,
                'file_name' => 'uploads/Screenshot 2017-09-19 07.43.48.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 12:54:55',
                'updated_at' => '2017-09-20 12:54:55',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 13,
                'file_name' => 'uploads/Screenshot 2017-08-20 08.21.33.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 12:56:15',
                'updated_at' => '2017-09-20 12:56:15',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 14,
                'file_name' => 'screenshot_2017_08_19_194244png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 12:56:53',
                'updated_at' => '2017-09-20 12:56:53',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 15,
                'file_name' => 'screenshot-2017-08-19-194244png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 12:58:59',
                'updated_at' => '2017-09-20 12:58:59',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'file_name' => 'Screenshot2017-08-1919.42.44.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 13:11:38',
                'updated_at' => '2017-09-20 13:11:38',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 17,
                'file_name' => 'Screenshot_2017-08-19_19.42.44.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 13:12:11',
                'updated_at' => '2017-09-20 13:12:11',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 18,
                'file_name' => 'Screenshot_2017-08-19_19.42.44.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 13:20:07',
                'updated_at' => '2017-09-20 13:20:07',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 19,
                'file_name' => 'Screenshot_2017-08-17_08.43.35.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-20 13:27:54',
                'updated_at' => '2017-09-20 13:27:54',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 20,
                'file_name' => 'ksauhs-flag.mp4',
                'action_plan_id' => 2,
                'created_at' => '2017-09-25 07:15:30',
                'updated_at' => '2017-09-25 07:15:30',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 21,
                'file_name' => 'Screenshot_2017-09-21_12.22.32.jpg',
                'action_plan_id' => 2,
                'created_at' => '2017-09-25 07:15:57',
                'updated_at' => '2017-09-25 07:15:57',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 22,
                'file_name' => '10312352_10152061207360588_5928058365697809706_n.jpg',
                'action_plan_id' => 1,
                'created_at' => '2017-09-25 07:40:16',
                'updated_at' => '2017-09-25 07:40:16',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 23,
                'file_name' => 'Screenshot_2017-07-29_21.27.43.png',
                'action_plan_id' => 1,
                'created_at' => '2017-09-25 08:02:44',
                'updated_at' => '2017-09-25 08:02:44',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}