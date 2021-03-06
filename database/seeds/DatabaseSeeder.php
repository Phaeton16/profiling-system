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
         $this->call(GenderTableSeeder::class);
         $this->call(CoursesTableSeeder::class);
         $this->call(LevelsTableSeeder::class);
         $this->call(UsersTableSeeder::class);
    }
}
