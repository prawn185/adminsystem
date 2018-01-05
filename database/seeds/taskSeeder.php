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
                'priority'    => "Normal",
                'assignedTo'  => 1,
                'status'      => "Open",
                'total_time'   => 60,
                'time_used'   => 27,
                'description' => $faker->text,
                'customer_id'     => 1,
                'created_by'     => 1,
                'updated_by'     => 1,
//                'user_id'     => $i,

            ]);
        }
    }
}
