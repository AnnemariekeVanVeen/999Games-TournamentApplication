<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = config('roles.models.role')::where('name', '=', 'Unverified')->first();
        $adminRole = config('roles.models.role')::where('name', '=', 'Admin')->first();
        $permissions = config('roles.models.permission')::all();

        /*
         * Add Users
         *
         */
        if (config('roles.models.defaultUser')::where('email', '=', 'carcassonne@999games.nl')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([

                'first_name'     => 'Carcassonne',
                'last_name'     => '999games',
                'email'    => 'carcassonne@999games.nl',
                'password' => Hash::make('20Bordspel20'),
                'api_token' => Str::random(60)

            ]);

            $newUser->attachRole($adminRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }

        if (config('roles.models.defaultUser')::where('email', '=', 's.hoeksema@windesheim.nl')->first() === null) {
            $newUser = config('roles.models.defaultUser')::create([

                'first_name'     => 'Stephan',
                'last_name'     => 'Hoeksema',
                'email'    => 's.hoeksema@windesheim.nl',
                'password' => Hash::make('Steph1290'),
                        "api_token" => Str::random(60),

            ]);

            $newUser->attachRole($userRole);
            foreach ($permissions as $permission) {
                $newUser->attachPermission($permission);
            }
        }
    }
}
