<?php

use Illuminate\Database\Seeder;

class ExamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->delete();

        DB::table('exams')->insert([
          0 => [
            'id' => 1,
             'name' => 'Semester 1 2019',
             'type' => 'main',
             'year_id' => 1,
             'start_date' => '2019-03-25',
             'end_date' => '2019-03-30',
             'status' => true,
          ],
        ]);
    }
}
