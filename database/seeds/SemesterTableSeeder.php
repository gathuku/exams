<?php

use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->delete();

        DB::table('semesters')->insert(array(
          0 => array(
            'id' => 1,
            'year_id' => 1,
            'name' => 'Semester 1',
            'exam_date' => '2019-03-16 12:34:00',
            'current' =>false,
          ),

          1 => array(
            'id' => 2,
            'year_id' => 1,
            'name' => 'Semester 2',
            'exam_date' => 23-03-2019,
            'current' =>false,
          ),

          2 => array(
            'id' => 3,
            'year_id' => 1,
            'name' => 'Semester 3',
            'exam_date' => 23-03-2019,
            'current' =>false,
          ),
        ));
    }
}
