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
        //$this->call(UsersTableSeeder::class);
        //$this->call(TasksTableSeeder::class);
        
        //$this->call(EquiposTableSeeder::class);
        //$this->call(CitiesTableSeeder::class);
        $this->call(PartidosTableSeeder::class);
        $this->call(ColequiposTableSeeder::class);
    }
}
