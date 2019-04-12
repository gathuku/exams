<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  $faker=Faker::create();
        DB::table('users')->delete();
        DB::table('users')->insert(

          array(

          0=> array(
            'id' => 1,
            'role_id' => 1,
            'name' => 'Moses gathuku',
            'email' => 'gathuku@biodkod.co.ke',
            'regno' => 'IN14/20358/15',
            'phone' => '254705112855',
            'type' => 'GSS',
            'in_session' =>false,
            'program_id' => 1,
            'faculty_id' => 1,
            'year_id' =>1,
            'avatar' =>null,
            'email_verified_at' =>null,
            'password' => bcrypt('password'),
          ),

           1 => array(
             'id' => 2,
             'role_id' => 1,
             'name' => 'Daniel Gitau',
             'email' => 'danielgitau@gmail.com',
             'regno' => 'IN13/20380/15',
             'phone' => '0705112855',
             'type' => 'GSS',
             'in_session' =>false,
             'program_id' => 2,
             'faculty_id' => 1,
             'year_id' =>1,
             'avatar' =>null,
             'email_verified_at' =>null,
             'password' => bcrypt('password'),
           ),

            2 => array(
              'id' => 3,
              'role_id' => 1,
              'name' => 'Caroline Jepkorir',
              'email' => 'jepkorir@gmail.com',
              'regno' => 'IN13/20350/15',
              'phone' => '0705112855',
              'type' => 'GSS',
              'in_session' =>false,
              'program_id' => 2,
              'faculty_id' => 1,
              'year_id' =>1,
              'avatar' =>null,
              'email_verified_at' =>null,
              'password' => bcrypt('password'),
            ),

            3 => array(
              'id' => 4,
              'role_id' => 1,
              'name' => 'Nicolus Mariga',
              'email' => 'mariga@gmail.com',
              'regno' => 'AS12/20351/15',
              'phone' => '0707837363',
              'type' => 'GSS',
              'in_session' =>false,
              'program_id' => 3,
              'faculty_id' => 1,
              'year_id' =>1,
              'avatar' =>null,
              'email_verified_at' =>null,
              'password' => bcrypt('password'),
            ),

            4 => array(
              'id' => 5,
              'role_id' => 1,
              'name' => 'Dennis kioko',
              'email' => 'kioko@gmail.com',
              'regno' => 'AS12/20353/15',
              'phone' => '0705112855',
              'type' => 'GSS',
              'in_session' =>false,
              'program_id' => 3,
              'faculty_id' => 1,
              'year_id' =>1,
              'avatar' =>null,
              'email_verified_at' =>null,
              'password' => bcrypt('password'),
            ),

          )
        );
    }
}
