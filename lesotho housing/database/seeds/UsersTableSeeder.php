<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('roles_user')->truncate();
        $adminRole = Roles::where('name', 'admin')->first();
        $authorRole = Roles::where('name', 'author')->first();
        $userRole = Roles::where('name', 'user')->first();


        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@ls.com',
            'mobile' => '59030870',
            'password' => Hash::make('adminpassword'),
        ]);

        $auth = User::create([
            'name' => 'Auth User',
            'email' => 'auth@ls.com',
            'mobile' => '69030870',
            'password' => Hash::make('authpassword'),
        ]);

        $user = User::create([
            'name' => 'user User',
            'email' => 'user@ls.com',
            'mobile' => '68030870',
            'password' => Hash::make('userpassword'),
        ]);

        $admin->roles()->attach($adminRole);
        $auth->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
