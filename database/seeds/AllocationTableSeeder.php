<?php

use Illuminate\Database\Seeder;

class AllocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allocations')->delete();

        DB::table('allocations')->insert([
            0=>[
              'course_id'=>1,
              'unit_id' =>1,
              'lecturer_id' =>8,
              'semester_id' =>1,
            ],
        ]);
    }
}
