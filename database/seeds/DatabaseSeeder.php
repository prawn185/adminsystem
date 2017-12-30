<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            prioritySeeder::class,
//            projectSeeder::class,
            taskSeeder::class,
            userSeeder::class,
            notesSeeder::class
        ]);
    }
}
