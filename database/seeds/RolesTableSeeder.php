<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert(array(
          0 => array(
            'id'=>1,
            'name' => 'Student',
          ),

          1 => array(
            'id' => 2,
            'name' => 'Lecturer',
          ),

          2 => array(
            'id' => 3,
            'name' => 'Administrator'
          )
        ));
    }
}
