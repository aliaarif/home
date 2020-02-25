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
        //$this->call(CountriesTableSeeder::class);
        //$this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(LocalitiesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        //$this->call(ClientsTableSeeder::class);
        //$this->call(AssignmentsTableSeeder::class);
        //$this->call(TasksTableSeeder::class);
    }
}
