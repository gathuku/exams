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
            'name' => 'Introduction to Information Technology',
            'code' => 'ACMP 101',
            'hours' => '50',
            'level' => 0,
          ],
          1 => [
            'id'=>2,
            'program_id' => 1,
            'name' => 'Computer hardware',
            'code' => 'ACMP 111',
            'hours' => '50',
            'level' => 0,
          ],
          2 => [
            'id'=>3,
            'program_id' => 1,
            'name' => 'Basic mathemaics',
            'code' => 'ACMP 123',
            'hours' => '50',
            'level' => 0,
          ],
          3 => [
            'id'=>4,
            'program_id' => 1,
            'name' => 'Introduction to Programming [Java]',
            'code' => 'ACMP 121',
            'hours' => '50',
            'level' => 0,
          ],
          4 => [
            'id'=>5,
            'program_id' => 1,
            'name' => 'Enterpreneurship',
            'code' => 'ACMP 234',
            'hours' => '50',
            'level' => 1,
          ],
          5 =>[
            'id'=>6,
            'program_id' => 1,
            'name' => 'Discrete Mathematics for Computer Science',
            'code' => 'COMP 102',
            'hours' => '45',
            'level' => 0,
          ],
          6 =>[
            'id'=>7,
            'program_id' => 1,
            'name' => 'Grahics design',
            'code' => 'ACMP 334',
            'hours' => '45',
            'level' => 2,
          ],
          7 =>[
            'id'=>8,
            'program_id' => 1,
            'name' => 'Operating Systems',
            'code' => 'ACMP 113',
            'hours' => '50',
            'level' => 0,
          ],
          8 => [
            'id'=>9,
            'program_id' => 1,
            'name' => 'Mathematical Methods for Computer Scientists',
            'code' => 'ACMP 203',
            'hours' => '50',
            'level' => 1,
          ],
          9 => [
            'id'=>10,
            'program_id' => 1,
            'name' => 'Structural Programming Principles [C]',
            'code' => 'ACMP 224',
            'hours' => '50',
            'level' => 1,
          ],
          10 => [
            'id'=>11,
            'program_id' => 1,
            'name' => 'Web Programming and Administration',
            'code' => 'ACMP 225',
            'hours' => '50',
            'level' => 1,
          ],
          11 => [
            'id'=>12,
            'program_id' => 1,
            'name' => 'Introduction to Program Design',
            'code' => 'ACMP 226',
            'hours' => '50',
            'level' => 1,
          ],
          12 => [
            'id'=>13,
            'program_id' => 1,
            'name' => 'Artificial Intelligence',
            'code' => 'ACMP 308',
            'hours' => '55',
            'level' => 2,
          ],

          13 => [
            'id'=>14,
            'program_id' => 1,
            'name' => 'Desktop Application & Development',
            'code' => 'ACMP 343',
            'hours' => '55',
            'level' => 2,
          ],

          14 => [
            'id'=>15,
            'program_id' => 1,
            'name' => 'Computer Graphics',
            'code' => 'ACMP 344',
            'hours' => '55',
            'level' => 2,
          ],
          15 => [
            'id'=>16,
            'program_id' => 1,
            'name' => 'Introduction to Databases',
            'code' => 'ACMP 351',
            'hours' => '55',
            'level' => 2,
          ],
          16 => [
            'id'=>17,
            'program_id' => 1,
            'name' => 'Data mining',
            'code' => 'ACMP 434',
            'hours' => '55',
            'level' => 3,
          ],
          17 => [
            'id'=>18,
            'program_id' => 1,
            'name' => 'Computer Animation',
            'code' => 'ACMP 433',
            'hours' => '55',
            'level' => 3,
          ],
          18 => [
            'id'=>19,
            'program_id' => 1,
            'name' => 'Enterpreneurship',
            'code' => 'ACMP 431',
            'hours' => '40',
            'level' => 3,
          ],

          //Cource with id 2=computer Science
          19 => [
            'id'=>20,
            'program_id' => 2,
            'name' => 'Introduction to Information Technology',
            'code' => 'COMP 101',
            'hours' => '50',
            'level' => 0,
          ],
          20 => [
            'id'=>21,
            'program_id' => 2,
            'name' => 'Computer hardware',
            'code' => 'COMP 111',
            'hours' => '50',
            'level' => 0,
          ],
          21 => [
            'id'=>22,
            'program_id' => 2,
            'name' => 'Basic mathemaics',
            'code' => 'COMP 123',
            'hours' => '50',
            'level' => 0,
          ],
          22 => [
            'id'=>23,
            'program_id' => 2,
            'name' => 'Introduction to Programming [Java]',
            'code' => 'COMP 121',
            'hours' => '50',
            'level' => 0,
          ],
          23 => [
            'id'=>24,
            'program_id' => 2,
            'name' => 'Enterpreneurship',
            'code' => 'COMP 234',
            'hours' => '50',
            'level' => 1,
          ],
          24 =>[
            'id'=>25,
            'program_id' => 2,
            'name' => 'Discrete Mathematics for Computer Science',
            'code' => 'COMP 102',
            'hours' => '45',
            'level' => 0,
          ],
          25 =>[
            'id'=>26,
            'program_id' => 1,
            'name' => 'Grahics design',
            'code' => 'COMP 334',
            'hours' => '45',
            'level' => 2,
          ],
          26 =>[
            'id'=>27,
            'program_id' => 2,
            'name' => 'Operating Systems',
            'code' => 'COMP 113',
            'hours' => '50',
            'level' => 0,
          ],
          27 => [
            'id'=>28,
            'program_id' => 2,
            'name' => 'Mathematical Methods for Computer Scientists',
            'code' => 'COMP 203',
            'hours' => '50',
            'level' => 1,
          ],
          28 => [
            'id'=>29,
            'program_id' => 2,
            'name' => 'Structural Programming Principles [C]',
            'code' => 'COMP 224',
            'hours' => '50',
            'level' => 1,
          ],
          29 => [
            'id'=>30,
            'program_id' => 2,
            'name' => 'Web Programming and Administration',
            'code' => 'ACMP 225',
            'hours' => '50',
            'level' => 1,
          ],
          30 => [
            'id'=>31,
            'program_id' => 2,
            'name' => 'Introduction to Program Design',
            'code' => 'COMP 226',
            'hours' => '50',
            'level' => 1,
          ],
          31 => [
            'id'=>32,
            'program_id' => 2,
            'name' => 'Artificial Intelligence',
            'code' => 'COMP 308',
            'hours' => '55',
            'level' => 2,
          ],

          32 => [
            'id'=>33,
            'program_id' => 2,
            'name' => 'Desktop Application & Development',
            'code' => 'COMP 343',
            'hours' => '55',
            'level' => 2,
          ],

          33 => [
            'id'=>34,
            'program_id' => 2,
            'name' => 'Computer Graphics',
            'code' => 'ACMP 344',
            'hours' => '55',
            'level' => 2,
          ],
          34 => [
            'id'=>35,
            'program_id' => 2,
            'name' => 'Introduction to Databases',
            'code' => 'COMP 351',
            'hours' => '55',
            'level' => 2,
          ],
          35 => [
            'id'=>36,
            'program_id' => 2,
            'name' => 'Data mining',
            'code' => 'ACMP 434',
            'hours' => '55',
            'level' => 3,
          ],
          36 => [
            'id'=>37,
            'program_id' => 2,
            'name' => 'Computer Animation',
            'code' => 'COMP 433',
            'hours' => '55',
            'level' => 3,
          ],
          37 => [
            'id'=>38,
            'program_id' => 2,
            'name' => 'Enterpreneurship',
            'code' => 'COMP 431',
            'hours' => '40',
            'level' => 3,
          ],


        ]);
    }
}
