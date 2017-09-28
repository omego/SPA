<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2015_10_31_162633_scaffoldinterfaces',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2017_08_01_112630_create_permission_tables',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 11,
                'migration' => '2017_08_02_111816_goals',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 12,
                'migration' => '2017_08_02_112028_projects',
                'batch' => 3,
            ),
            6 => 
            array (
                'id' => 14,
                'migration' => '2017_08_02_121049_initiatives',
                'batch' => 4,
            ),
            7 => 
            array (
                'id' => 15,
                'migration' => '2017_08_02_123808_action_plans',
                'batch' => 5,
            ),
            8 => 
            array (
                'id' => 16,
                'migration' => '2017_08_06_120835_action_plan_attachments',
                'batch' => 6,
            ),
            9 => 
            array (
                'id' => 17,
                'migration' => '2017_08_08_074812_initiative_attachments',
                'batch' => 7,
            ),
            10 => 
            array (
                'id' => 18,
                'migration' => '2017_08_08_075050_create_action_plan_attachments_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 19,
                'migration' => '2017_08_08_075050_create_action_plans_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 20,
                'migration' => '2017_08_08_075050_create_goals_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 21,
                'migration' => '2017_08_08_075050_create_initiative_attachments_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 22,
                'migration' => '2017_08_08_075050_create_initiatives_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 23,
                'migration' => '2017_08_08_075050_create_password_resets_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 24,
                'migration' => '2017_08_08_075050_create_permissions_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 25,
                'migration' => '2017_08_08_075050_create_projects_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 26,
                'migration' => '2017_08_08_075050_create_relations_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 27,
                'migration' => '2017_08_08_075050_create_role_has_permissions_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 28,
                'migration' => '2017_08_08_075050_create_roles_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 29,
                'migration' => '2017_08_08_075050_create_scaffoldinterfaces_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 30,
                'migration' => '2017_08_08_075050_create_user_has_permissions_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 31,
                'migration' => '2017_08_08_075050_create_user_has_roles_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 32,
                'migration' => '2017_08_08_075050_create_users_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 33,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_action_plan_attachments_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 34,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_action_plans_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 35,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_initiative_attachments_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 36,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_initiatives_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 37,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_projects_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 38,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_relations_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 39,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_role_has_permissions_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 40,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_user_has_permissions_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 41,
                'migration' => '2017_08_08_075051_add_foreign_keys_to_user_has_roles_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 42,
                'migration' => '2017_08_08_094927_create_action_plan_attachments_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 43,
                'migration' => '2017_08_08_094927_create_action_plans_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 44,
                'migration' => '2017_08_08_094927_create_goals_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 45,
                'migration' => '2017_08_08_094927_create_initiative_attachments_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 46,
                'migration' => '2017_08_08_094927_create_initiatives_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 47,
                'migration' => '2017_08_08_094927_create_password_resets_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 48,
                'migration' => '2017_08_08_094927_create_permissions_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 49,
                'migration' => '2017_08_08_094927_create_projects_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 50,
                'migration' => '2017_08_08_094927_create_relations_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 51,
                'migration' => '2017_08_08_094927_create_role_has_permissions_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 52,
                'migration' => '2017_08_08_094927_create_roles_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 53,
                'migration' => '2017_08_08_094927_create_scaffoldinterfaces_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 54,
                'migration' => '2017_08_08_094927_create_user_has_permissions_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 55,
                'migration' => '2017_08_08_094927_create_user_has_roles_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 56,
                'migration' => '2017_08_08_094927_create_users_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 57,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_action_plan_attachments_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 58,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_action_plans_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 59,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_initiative_attachments_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 60,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_initiatives_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 61,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_projects_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 62,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_relations_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 63,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_role_has_permissions_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 64,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_user_has_permissions_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 65,
                'migration' => '2017_08_08_094928_add_foreign_keys_to_user_has_roles_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 67,
                'migration' => '2017_09_17_123614_GoalsUsers',
                'batch' => 8,
            ),
            59 => 
            array (
                'id' => 68,
                'migration' => '2017_09_17_125455_GoalsUsers',
                'batch' => 9,
            ),
            60 => 
            array (
                'id' => 69,
                'migration' => '2017_09_20_053130_ProjectsUsers',
                'batch' => 10,
            ),
        ));
        
        
    }
}