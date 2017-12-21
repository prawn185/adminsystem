<?php

use Illuminate\Database\Seeder;

class prioritySeeder extends Seeder
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
            DB::table('priority')->insert([

                // 'name'    => $faker->title,
//                'project_id' => 1,
//                'user_id'    => 1,
//                'task_id'    => 1,

            ]);
        }
    }
}
