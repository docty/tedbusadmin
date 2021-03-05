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
            'companyName' => 'VIP',
            'driverName' => 'Francis Oppong',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
