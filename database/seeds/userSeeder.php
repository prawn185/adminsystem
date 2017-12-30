<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name'       => "admin@admin.com",
            'email'    => "admin@admin.com",
            'password'  => bcrypt('admin123'),
            'working_hours'  => 480,
            'time_left'  => 360,
            'date_of_birth'  => now(),
            'team'  => "Web",

        ]);
    }
}
