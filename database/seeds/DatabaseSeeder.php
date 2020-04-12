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
        $this->call(CarrerasTableSeeder::class);
<<<<<<< HEAD
        $this->call(ProfesorTableSeeder::class);
        $this->call(AutoridadsTableSeeder::class);
=======
        $this->call([ProfesorTableSeeder::class]);
        $this->call(AutoridadsTableSeeder::class);
        
>>>>>>> master
    }
}
