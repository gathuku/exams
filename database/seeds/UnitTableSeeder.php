<?php

use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('units')->delete();

        DB::table('units')->insert([
          0 => [
            'id'=>1,
            'program_id' => 1,
            'name' => 'Programming fundamentals',
            'code' => 'ACMP 101',
            'hours' => '50',
            'level' => '1st year',
          ],
          1 => [
            'id'=>2,
            'program_id' => 1,
            'name' => 'introduction to java',
            'code' => 'ACMP 130',
            'hours' => '50',
            'level' => '1st year',
          ],
          2 => [
            'id'=>3,
            'program_id' => 1,
            'name' => 'Basic mathemaics',
            'code' => 'ACMP 123',
            'hours' => '50',
            'level' => '1st year',
          ],
          3 => [
            'id'=>4,
            'program_id' => 1,
            'name' => 'math for computer scientists',
            'code' => 'ACMP 290',
            'hours' => '50',
            'level' => '2nd year',
          ],
          4 => [
            'id'=>5,
            'program_id' => 1,
            'name' => 'Enterpreneurship',
            'code' => 'ACMP 234',
            'hours' => '50',
            'level' => '2nd year',
          ],
        ]);
    }
}
