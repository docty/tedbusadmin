<?php

use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'companyName' => 'Tedbus',
            'driverName' => 'Francis Oppong',
            'phoneNumber' => '0247049416',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
