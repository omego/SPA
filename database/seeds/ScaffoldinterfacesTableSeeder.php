<?php

use Illuminate\Database\Seeder;

class ScaffoldinterfacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scaffoldinterfaces')->delete();
        
        \DB::table('scaffoldinterfaces')->insert(array (
            0 => 
            array (
                'id' => 7,
                'package' => 'Laravel',
                'migration' => '/Applications/MAMP/htdocs/spa/database/migrations/2017_08_02_111816_goals.php',
                'model' => '/Applications/MAMP/htdocs/spa/app/Goal.php',
                'controller' => '/Applications/MAMP/htdocs/spa/app/Http/Controllers/GoalController.php',
                'views' => '/Applications/MAMP/htdocs/spa/resources/views/goal',
                'tablename' => 'goals',
                'created_at' => '2017-08-02 11:18:16',
                'updated_at' => '2017-08-02 11:18:16',
            ),
            1 => 
            array (
                'id' => 8,
                'package' => 'Laravel',
                'migration' => '/Applications/MAMP/htdocs/spa/database/migrations/2017_08_02_112028_projects.php',
                'model' => '/Applications/MAMP/htdocs/spa/app/Project.php',
                'controller' => '/Applications/MAMP/htdocs/spa/app/Http/Controllers/ProjectController.php',
                'views' => '/Applications/MAMP/htdocs/spa/resources/views/project',
                'tablename' => 'projects',
                'created_at' => '2017-08-02 11:20:28',
                'updated_at' => '2017-08-02 11:20:28',
            ),
            2 => 
            array (
                'id' => 10,
                'package' => 'Laravel',
                'migration' => '/Applications/MAMP/htdocs/spa/database/migrations/2017_08_02_121049_initiatives.php',
                'model' => '/Applications/MAMP/htdocs/spa/app/Initiative.php',
                'controller' => '/Applications/MAMP/htdocs/spa/app/Http/Controllers/InitiativeController.php',
                'views' => '/Applications/MAMP/htdocs/spa/resources/views/initiative',
                'tablename' => 'initiatives',
                'created_at' => '2017-08-02 12:10:49',
                'updated_at' => '2017-08-02 12:10:49',
            ),
            3 => 
            array (
                'id' => 11,
                'package' => 'Laravel',
                'migration' => '/Applications/MAMP/htdocs/spa/database/migrations/2017_08_02_123808_action_plans.php',
                'model' => '/Applications/MAMP/htdocs/spa/app/Action_plan.php',
                'controller' => '/Applications/MAMP/htdocs/spa/app/Http/Controllers/Action_planController.php',
                'views' => '/Applications/MAMP/htdocs/spa/resources/views/action_plan',
                'tablename' => 'action_plans',
                'created_at' => '2017-08-02 12:38:08',
                'updated_at' => '2017-08-02 12:38:08',
            ),
            4 => 
            array (
                'id' => 12,
                'package' => 'Laravel',
                'migration' => '/Applications/MAMP/htdocs/spa/database/migrations/2017_08_06_120835_action_plan_attachments.php',
                'model' => '/Applications/MAMP/htdocs/spa/app/Action_plan_attachment.php',
                'controller' => '/Applications/MAMP/htdocs/spa/app/Http/Controllers/Action_plan_attachmentController.php',
                'views' => '/Applications/MAMP/htdocs/spa/resources/views/action_plan_attachment',
                'tablename' => 'action_plan_attachments',
                'created_at' => '2017-08-06 12:08:35',
                'updated_at' => '2017-08-06 12:08:35',
            ),
            5 => 
            array (
                'id' => 13,
                'package' => 'Laravel',
                'migration' => '/Applications/MAMP/htdocs/spa/database/migrations/2017_08_08_074812_initiative_attachments.php',
                'model' => '/Applications/MAMP/htdocs/spa/app/Initiative_attachment.php',
                'controller' => '/Applications/MAMP/htdocs/spa/app/Http/Controllers/Initiative_attachmentController.php',
                'views' => '/Applications/MAMP/htdocs/spa/resources/views/initiative_attachment',
                'tablename' => 'initiative_attachments',
                'created_at' => '2017-08-08 07:48:12',
                'updated_at' => '2017-08-08 07:48:12',
            ),
        ));
        
        
    }
}