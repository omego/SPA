<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(GoalsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(InitiativesTableSeeder::class);
        $this->call(RelationsTableSeeder::class);
        $this->call(ActionPlansTableSeeder::class);
        $this->call(ScaffoldinterfacesTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(UserHasPermissionsTableSeeder::class);
        $this->call(UserHasRolesTableSeeder::class);
        $this->call(ActionPlanAttachmentsTableSeeder::class);
    }
}
