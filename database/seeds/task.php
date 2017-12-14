<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class task extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('task')->insert([
            'name' => str_random(10),
            'description' => str_random(255),
            'assignedTo' => "8",
            'assignedBy' => "8",
            'status' => "Open",
            'time' => \Carbon\Carbon::now(),
        ]);
    }
}
