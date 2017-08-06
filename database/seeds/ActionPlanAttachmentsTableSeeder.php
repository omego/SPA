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
                'id' => 1,
                'file_name' => 'hi',
                'action_plan_id' => 1,
                'created_at' => '2017-08-06 12:09:27',
                'updated_at' => '2017-08-06 12:09:27',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'file_name' => 'saudi-arabia-healthcare-simulation-jobs-1024x767.png',
                'action_plan_id' => 1,
                'created_at' => '2017-08-06 12:16:05',
                'updated_at' => '2017-08-06 12:16:05',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}