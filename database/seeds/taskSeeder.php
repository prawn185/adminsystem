<?php

use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
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
            DB::table('task')->insert([

                'title'       => $faker->title,
                'priority'    => 1,
                'assignedTo'  => 1,
                'status'      => "open",
                'time_left'   => 1,
                'description' => $faker->text,
                'user_id'     => $i,

            ]);
        }
    }
}
