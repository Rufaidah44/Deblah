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
        $autherRole = Role::where('name','auther')->first(); 
        $userRole = Role::where('name','user')->first(); 

        $admin = User::create([
            'name' => 'admin User',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password')

        ]);

        $auther = User::create([
            'name' => 'auther User',
            'email' => 'auther@mail.com',
            'password' => Hash::make('password')

        ]);

        $user = User::create([
            'name' => 'genaric User',
            'email' => 'user@mail.com',
            'password' => Hash::make('password')

        ]);

        $admin->roles()->attach($adminRole);
        $auther->roles()->attach($autherRole);
        $user->roles()->attach($userRole);


         User::create([
            'name'              => 'Mahdi Ayman',
            'email'             => 'mahdi@mail.com',
            'password'          => Hash::make('password'),
            'remember_token'    => Str::random(10), 
        ]); 
    }
}
