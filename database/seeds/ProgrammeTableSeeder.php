<?php

use Illuminate\Database\Seeder;

class ProgrammeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programmes')->delete();

        DB::table('programmes')->insert(array(
          0 => array(
            'id'=>1,
            'faculty_id' => 1,
            'name'=> 'Applied Computer Science',
            'type' => 'degree',
          ),

          1 => array(
            'id'=>2,
            'faculty_id' => 1,
            'name'=> 'Computer Science',
            'type' => 'degree',
          ),

          2 => array(
            'id'=>3,
            'faculty_id' => 1,
            'name'=> 'Software Engineering',
            'type' => 'degree',
          ),

          3 => array(
            'id'=>4,
            'faculty_id' => 2,
            'name'=> 'Industrial Chemistry',
            'type' => 'degree',
          ),

        ));
    }
}
