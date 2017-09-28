<?php

use Illuminate\Database\Seeder;

class RelationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relations')->delete();
        
        \DB::table('relations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'scaffoldinterface_id' => 8,
                'to' => '7',
                'having' => 'OneToMany',
                'created_at' => '2017-08-02 11:20:28',
                'updated_at' => '2017-08-02 11:20:28',
            ),
            1 => 
            array (
                'id' => 4,
                'scaffoldinterface_id' => 10,
                'to' => '8',
                'having' => 'OneToMany',
                'created_at' => '2017-08-02 12:10:49',
                'updated_at' => '2017-08-02 12:10:49',
            ),
            2 => 
            array (
                'id' => 5,
                'scaffoldinterface_id' => 11,
                'to' => '10',
                'having' => 'OneToMany',
                'created_at' => '2017-08-02 12:38:08',
                'updated_at' => '2017-08-02 12:38:08',
            ),
            3 => 
            array (
                'id' => 6,
                'scaffoldinterface_id' => 12,
                'to' => '11',
                'having' => 'OneToMany',
                'created_at' => '2017-08-06 12:08:35',
                'updated_at' => '2017-08-06 12:08:35',
            ),
            4 => 
            array (
                'id' => 7,
                'scaffoldinterface_id' => 13,
                'to' => '10',
                'having' => 'OneToMany',
                'created_at' => '2017-08-08 07:48:12',
                'updated_at' => '2017-08-08 07:48:12',
            ),
        ));
        
        
    }
}