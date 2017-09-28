<?php

use Illuminate\Database\Seeder;

class InitiativeAttachmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiative_attachments')->delete();
        
        \DB::table('initiative_attachments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file_name' => 'Screenshot_2017-09-21_12.22.32.jpg',
                'initiative_id' => 3,
                'created_at' => '2017-09-25 07:52:58',
                'updated_at' => '2017-09-25 07:52:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'file_name' => 'Screenshot_2017-09-21_12.22.32.jpg',
                'initiative_id' => 3,
                'created_at' => '2017-09-25 07:53:37',
                'updated_at' => '2017-09-25 07:53:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'file_name' => 'Screenshot_2017-08-29_20.44.00_copy.jpg',
                'initiative_id' => 3,
                'created_at' => '2017-09-25 07:53:47',
                'updated_at' => '2017-09-25 07:53:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'file_name' => 'intersection-1.jpg',
                'initiative_id' => 3,
                'created_at' => '2017-09-25 10:07:48',
                'updated_at' => '2017-09-25 10:07:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'file_name' => '10312352_10152061207360588_5928058365697809706_n.jpg',
                'initiative_id' => 3,
                'created_at' => '2017-09-25 10:08:46',
                'updated_at' => '2017-09-25 10:08:46',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'file_name' => 'Screenshot_2017-09-21_12.22.32.jpg',
                'initiative_id' => 3,
                'created_at' => '2017-09-26 06:47:59',
                'updated_at' => '2017-09-26 06:47:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}