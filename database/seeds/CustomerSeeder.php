<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'firstName' => 'John',
            'lastName' => 'Buddy',
            'mobile' => '02000000',
            'customerId' => '4649415',
            'urlId' => '43mdaf-dwrw-424f-d-d',
            'email' => 'docty@test.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
