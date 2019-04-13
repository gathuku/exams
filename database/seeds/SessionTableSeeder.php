<?php

use Illuminate\Database\Seeder;

class SessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('session')->delete();
        DB::table('session')->insert([
          0 =>[
            'id' => 1,
            'regno' => 'IN14/20358/15',
            'year_id'=>1,
            'semester_id'=>1,
            'status' =>true,
          ],
        ]);
    }
}
