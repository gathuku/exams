<?php

use Illuminate\Database\Seeder;

class YearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->delete();

        DB::table('years')->insert(array(

          0 => array(
            'id' =>1,
            'name' => '2018',
          ),

          1 => array(
            'id' =>2,
            'name' => '2019',
          ),

          0 => array(
            'id' =>3,
            'name' => '2020'
          ),
        ));
    }
}
