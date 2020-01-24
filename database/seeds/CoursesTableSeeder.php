<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'name'=>'STEM'
            ],
            [
                'name'=>'GAS'
            ],
            [
                'name'=>'HUMMS'
            ],
            [
                'name'=>'ICT'
            ],
            [
                'name'=>'AD'
            ],
            [
                'name'=>'HE'
            ]

            ]);
    }
}
