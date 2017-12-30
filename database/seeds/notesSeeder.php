<?php

use Illuminate\Database\Seeder;

class notesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('notes')->insert([

                'task_id'      => 1,

                'description'  => "Hello World this this a note made by",
                'time'         => 15,
                'user_id'      => 1,


            ]);
        }
    }
}
