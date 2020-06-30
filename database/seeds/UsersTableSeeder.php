<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
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
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name','admin')->first(); 
        $autherRole = Role::where('name','ervice provider')->first(); 
        $userRole = Role::where('name','customer')->first(); 

        $admin = User::create([
            'name' => 'admin User',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'password' => Hash::make('password')

        ]);

        $auther = User::create([
            'name' => 'service provider User',
            'email' => 'auther@mail.com',
            'role' => 'service provider',
            'password' => Hash::make('password')

        ]);

        $user = User::create([
            'name' => 'genaric User',
            'email' => 'user@mail.com',
            'role' => 'customer',
            'password' => Hash::make('password')

        ]);

        $admin->roles()->attach($adminRole);
        $auther->roles()->attach($autherRole);
        $user->roles()->attach($userRole);


        
    }
}
