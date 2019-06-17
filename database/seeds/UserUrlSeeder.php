<?php

use Illuminate\Database\Seeder;

class UserUrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('User_Urls')->insert([
            "userURL" => "rakeshwedsdimple",   
        ]);
        DB::table('User_Urls')->insert([
            "userURL" => "rohanwedsrishika",   
        ]);
        DB::table('User_Urls')->insert([
            "userURL" => "rakeshwedsgunjan",   
        ]);
        DB::table('User_Urls')->insert([
            "userURL" => "abishekwedssimran",   
        ]);
    }
}
