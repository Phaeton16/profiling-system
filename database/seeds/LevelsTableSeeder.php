<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            [
                'name'=>'Grade 11'
            ],
            [
                'name'=>'Grade 12'
            ]

            ]);
    }
}
