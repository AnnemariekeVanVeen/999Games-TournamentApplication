<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ConnectRelationshipsSeeder::class);

        $this->call(UsersFillSeeder::class);

        $this->call(RoundsTableSeeder::class);
        // Quick table mode, when you fix reusable tables from bugging feel free to tone this back to one call.
        $this->call(GameTablesTableSeeder::class);
        $this->call(GameTablesTableSeeder::class);
        $this->call(GameTablesTableSeeder::class);
        $this->call(GameTablesTableSeeder::class);

        $this->call(ScoresTableSeeder::class);
        $this->call(NewsfeedsTableSeeder::class);
    }
}
