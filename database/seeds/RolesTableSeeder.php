<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::truncate();

        Role::firstOrCreate(['name'=>'admin']);
        Role::create(['name'=>'coordinador']);
        Role::create(['name'=>'user']);

    }
}
