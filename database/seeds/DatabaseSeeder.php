<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('countries')->delete();
        // $countries = array(
        //     array('code' => 'US', 'name' => 'United Stages'),
        //     array('code' => 'ENG', 'name' => 'England'),
        //     array('code' => 'SCO', 'name' => 'Scotland'),
        //     array('code' => 'IRL', 'name' => 'Ireland')
        // );
        // DB::table('countries')->insert($countries);

        // DB::table('hobbies')->delete();
        // $hobbies = array(
        //     array('title' => 'GAA'),
        //     array('title' => 'Coding'),
        //     array('title' => 'Snooker'),
        //     array('title' => 'Football'),
        //     array('title' => 'Dancing'),
        //     array('title' => 'Art'),
        // );
        // DB::table('hobbies')->insert($hobbies);

        // DB::table('languages')->delete();
        // $languages = array(
        //     array('name' => 'English', 'iso_639-1' => 'en'),
        //     array('name' => 'French', 'iso_639-1' => 'fr'),
        //     array('name' => 'Gaeilge', 'iso_639-1' => 'Ga'),
        // );
        // DB::table('languages')->insert($languages);

        DB::table('occupations')->delete();
        $occupations = array(
            array('title' => 'student'),
            array('title' => 'marketing'),
            array('title' => 'programming'),
        );
        DB::table('occupations')->insert($occupations);
    }
}