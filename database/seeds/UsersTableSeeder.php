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
        //User::truncate();
        //DB::table('role_user')->truncate();

        $adminRole=Role::where('name','admin')->first();
        $coordRole=Role::where('name','coordinador')->first();
        $userRole=Role::where('name','user')->first();

        $admin=User::firstOrCreate([
            'name'=>'Admin User',
            'email'=>'admin@example.com',
            'password'=>Hash::make('password')
        ]);

        $coordinador=User::create([
            'name'=>'Coordinador User',
            'email'=>'coordinador@example.com',
            'password'=>Hash::make('password')
        ]);

        $user=User::create([
            'name'=>'User Example',
            'email'=>'user@example.com',
            'password'=>Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $coordinador->roles()->attach($coordRole);
        $user->roles()->attach($userRole);
    }
}
