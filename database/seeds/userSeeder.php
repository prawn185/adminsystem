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

        ]);
    }
}
