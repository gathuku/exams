<?php

use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->delete();

        DB::table('faculties')->insert(array(
          0 => [
            'id'=>1,
            'name'=>'Information Science and Technology',
            ],

            1 => [
              'id'=>2,
              'name'=>'Science and Mathematics',
              ],

        ));
    }
}
