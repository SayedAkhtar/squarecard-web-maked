<?php

use Illuminate\Database\Seeder;

class BasicDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Basic_Details')->insert([
            'user_surls_id' => '1',
            'event_name' => Str::random(10),
            'event_date' => "09/09/2019",
            'bride_name' => "Rakesh Mishra",
            'groom_name' => "Dimple Gupta",
            'venue' => "Royal Palace",    
        ]);
        DB::table('Basic_Details')->insert([
            'user_surls_id' => '2',
            'event_name' => "Wedding",
            'event_date' => "12/05/2019",
            'bride_name' => "Rohan Sharma",
            'groom_name' => "Rishika Gupta",
            'venue' => "White Palace",    
        ]);
        DB::table('Basic_Details')->insert([
            'user_surls_id' => '3',
            'event_name' => Str::random(10),
            'event_date' => "02/05/2019",
            'bride_name' => "Rakesh Jaiswal",
            'groom_name' => "Gunjan Gupta",
            'venue' => "Royal White House",    
        ]);
        DB::table('Basic_Details')->insert([
            'user_surls_id' => '4',
            'event_name' => Str::random(10),
            'event_date' => "09/09/2019",
            'bride_name' => "Abhishek Mishra",
            'groom_name' => "Simran Gupta",
            'venue' => "Shama Mahal",    
        ]);
    }
}
