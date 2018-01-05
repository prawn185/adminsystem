<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([

            'name'       => "IamACustomer",
            'email'    => "IamACustomer@customer.com",
            'tasks'  => 8,
            'time_per_month'  => 480,
            'billing_rate'  => 360,
            'paid_this_month'  => 1,
            'account_manager'  => 1,
            'project_manager'  => 1,

        ]);
    }
}
