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
                'goal_title' => 'Strategic Goal 1',
                'goal_discerption' => 'Bring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health careBring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health careBring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health careBring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health careBring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health careBring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health careBring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health care',
                'created_at' => '2017-08-02 12:15:08',
                'updated_at' => '2017-10-04 10:04:31',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'goal_title' => 'Strategic Goal 2',
                'goal_discerption' => 'Strengthen health sciences research and scholarly activities that are nationally relevant and internationally competitive nationally activities',
                'created_at' => '2017-08-02 12:15:18',
                'updated_at' => '2017-08-10 05:39:05',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'goal_title' => 'Strategic Goal 3',
                'goal_discerption' => 'Create and facilitate university-wide involvement in services that promote community health and engage in social responsibility',
                'created_at' => '2017-08-09 09:49:34',
                'updated_at' => '2017-08-09 19:30:29',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'goal_title' => 'Strategic Goal 4',
                'goal_discerption' => 'Dis',
                'created_at' => '2017-10-16 17:03:37',
                'updated_at' => '2017-10-16 17:03:37',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'goal_title' => 'Strategic Goal 5',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-10-16 17:15:49',
                'updated_at' => '2017-10-17 04:40:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}