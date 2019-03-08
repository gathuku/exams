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
        $this->call(UsersTableSeeder::class);
        $this->call(FacultyTableSeeder::class);
        $this->call(ProgrammeTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SemesterTableSeeder::class);
        $this->call(YearTableSeeder::class);
    }
}
