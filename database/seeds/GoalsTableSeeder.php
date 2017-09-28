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
                'goal_discerption' => 'Bring KSAU-HS national and international acclaim by continuously enhancing academic programs that produce competent health care',
                'created_at' => '2017-08-02 12:15:08',
                'updated_at' => '2017-09-18 11:52:11',
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
                'id' => 4,
                'goal_title' => 'Strategic Goal 4',
            'goal_discerption' => 'Enhance the internal quality assurance system (IQAS) to ensure the sustainability of QA processes and achieve the required accreditation in a timely manner',
                'created_at' => '2017-08-09 10:36:58',
                'updated_at' => '2017-08-09 19:30:56',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'goal_title' => 'Strategic Goal 5',
                'goal_discerption' => 'Attract, recruit, and retain highly qualified faculty and other personnel, and provide opportunities for professional enhancement qualified',
                'created_at' => '2017-08-09 12:24:55',
                'updated_at' => '2017-08-10 05:39:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'goal_title' => 'Strategic Goal 6',
                'goal_discerption' => 'Consolidate the integrations of MNGHA, KSAU-HS, and KAIMRC to reach the status of a unified health system status reach unified health system',
                'created_at' => '2017-08-09 19:53:57',
                'updated_at' => '2017-08-10 05:39:53',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'goal_title' => 'g2',
                'goal_discerption' => 'dis 3',
                'created_at' => '2017-08-23 06:50:22',
                'updated_at' => '2017-08-23 06:50:36',
                'deleted_at' => '2017-08-23 06:50:36',
            ),
            7 => 
            array (
                'id' => 8,
                'goal_title' => 'asdsa',
                'goal_discerption' => 'asdas',
                'created_at' => '2017-08-23 06:52:40',
                'updated_at' => '2017-08-23 06:52:48',
                'deleted_at' => '2017-08-23 06:52:48',
            ),
            8 => 
            array (
                'id' => 9,
                'goal_title' => 'dsadas',
                'goal_discerption' => 'dsadas',
                'created_at' => '2017-08-23 12:37:51',
                'updated_at' => '2017-08-23 12:37:51',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'goal_title' => 'fdsa',
                'goal_discerption' => 'fdsa',
                'created_at' => '2017-09-19 06:56:51',
                'updated_at' => '2017-09-19 06:56:51',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'goal_title' => 'sdf',
                'goal_discerption' => 'sdfsdfs',
                'created_at' => '2017-09-19 07:35:14',
                'updated_at' => '2017-09-19 07:35:14',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'goal_title' => 'fdsafds',
                'goal_discerption' => 'fdsafadsfasd',
                'created_at' => '2017-09-19 07:35:49',
                'updated_at' => '2017-09-19 07:35:49',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'goal_title' => 'fdsafds',
                'goal_discerption' => 'fdsa',
                'created_at' => '2017-09-19 08:06:36',
                'updated_at' => '2017-09-19 08:06:36',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'goal_title' => 'asd',
                'goal_discerption' => 'asd',
                'created_at' => '2017-09-19 08:11:22',
                'updated_at' => '2017-09-19 08:11:22',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'goal_title' => 'dasdsa',
                'goal_discerption' => 'dasdas',
                'created_at' => '2017-09-19 08:23:14',
                'updated_at' => '2017-09-19 08:23:14',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'goal_title' => 'Yes',
                'goal_discerption' => 'Yes',
                'created_at' => '2017-09-19 08:53:37',
                'updated_at' => '2017-09-19 08:53:37',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'goal_title' => 'Hi',
                'goal_discerption' => 'Hello',
                'created_at' => '2017-09-19 09:00:08',
                'updated_at' => '2017-09-19 09:00:08',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'goal_title' => 'asdas',
                'goal_discerption' => 'dsadas',
                'created_at' => '2017-09-19 10:11:19',
                'updated_at' => '2017-09-19 10:11:19',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'goal_title' => 'fdsf',
                'goal_discerption' => 'fsdfds',
                'created_at' => '2017-09-19 10:11:50',
                'updated_at' => '2017-09-19 10:11:50',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'goal_title' => 'dfasda',
                'goal_discerption' => 'dfdsfds',
                'created_at' => '2017-09-19 10:12:41',
                'updated_at' => '2017-09-19 10:12:41',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'goal_title' => 'fdsa',
                'goal_discerption' => 'fdsafadsfasd',
                'created_at' => '2017-09-19 10:14:25',
                'updated_at' => '2017-09-19 10:14:25',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'goal_title' => 'fdsafsd',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-09-19 10:16:05',
                'updated_at' => '2017-09-19 10:16:05',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'goal_title' => 'fdsafsd',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-09-19 10:17:02',
                'updated_at' => '2017-09-19 10:17:02',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'goal_title' => 'fdsafsd',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-09-19 10:26:27',
                'updated_at' => '2017-09-19 10:26:27',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'goal_title' => 'fdsafsd',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-09-19 10:26:40',
                'updated_at' => '2017-09-19 10:26:40',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'goal_title' => 'fdsafsd',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-09-19 10:26:59',
                'updated_at' => '2017-09-19 10:26:59',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'goal_title' => 'fdsafsddsads',
                'goal_discerption' => 'fdsafds',
                'created_at' => '2017-09-19 10:27:10',
                'updated_at' => '2017-09-19 10:27:10',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'goal_title' => 'sasd',
                'goal_discerption' => 'asdas',
                'created_at' => '2017-09-19 10:28:51',
                'updated_at' => '2017-09-19 10:28:51',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'goal_title' => 'asd',
                'goal_discerption' => 'a',
                'created_at' => '2017-09-19 10:40:27',
                'updated_at' => '2017-09-19 10:40:27',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'goal_title' => 'asd',
                'goal_discerption' => 'a',
                'created_at' => '2017-09-19 10:40:52',
                'updated_at' => '2017-09-19 10:40:52',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'goal_title' => 'asd',
                'goal_discerption' => 'a',
                'created_at' => '2017-09-19 10:41:30',
                'updated_at' => '2017-09-19 10:41:30',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'goal_title' => 'as',
                'goal_discerption' => 'dsdsds',
                'created_at' => '2017-09-19 10:45:12',
                'updated_at' => '2017-09-19 10:45:12',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'goal_title' => 'as',
                'goal_discerption' => 'dsdsds',
                'created_at' => '2017-09-19 10:47:45',
                'updated_at' => '2017-09-19 10:47:45',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'goal_title' => 'as',
                'goal_discerption' => 'dsdsds',
                'created_at' => '2017-09-19 10:49:19',
                'updated_at' => '2017-09-19 10:49:19',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'goal_title' => 'as',
                'goal_discerption' => 'dsdsds',
                'created_at' => '2017-09-19 10:50:03',
                'updated_at' => '2017-09-19 10:50:03',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'goal_title' => 'as',
                'goal_discerption' => 'dsdsds',
                'created_at' => '2017-09-19 10:50:51',
                'updated_at' => '2017-09-19 10:50:51',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'goal_title' => 'asd',
                'goal_discerption' => 'aaa',
                'created_at' => '2017-09-19 10:59:08',
                'updated_at' => '2017-09-19 10:59:08',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'goal_title' => 'a',
                'goal_discerption' => 'ds',
                'created_at' => '2017-09-19 11:02:19',
                'updated_at' => '2017-09-19 11:02:19',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'goal_title' => 'a',
                'goal_discerption' => 'ds',
                'created_at' => '2017-09-19 11:02:45',
                'updated_at' => '2017-09-19 11:02:45',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'goal_title' => 'Goal Yarab 2',
                'goal_discerption' => 'asdas',
                'created_at' => '2017-09-19 11:04:14',
                'updated_at' => '2017-09-19 11:04:14',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'goal_title' => 'Goal 17',
                'goal_discerption' => 'asd',
                'created_at' => '2017-09-19 11:05:50',
                'updated_at' => '2017-09-19 11:05:50',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'goal_title' => 'asd',
                'goal_discerption' => 'fdsd',
                'created_at' => '2017-09-19 11:06:39',
                'updated_at' => '2017-09-19 11:06:39',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'goal_title' => 'asdasd',
                'goal_discerption' => 'fdsfdsfsd',
                'created_at' => '2017-09-19 11:08:32',
                'updated_at' => '2017-09-19 11:08:32',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'goal_title' => 'fdsafds',
                'goal_discerption' => 'gfdsgfds',
                'created_at' => '2017-09-19 11:13:34',
                'updated_at' => '2017-09-19 11:13:34',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'goal_title' => 'dsadsa',
                'goal_discerption' => 'fdsfds',
                'created_at' => '2017-09-26 07:27:41',
                'updated_at' => '2017-09-26 07:27:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}