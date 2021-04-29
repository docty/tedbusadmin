<?php

use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buses')->insert([
            'companyName' => 'Tedbus',
            'numberPlate' => 'AS-324-2442',
            'busName' => 'VIP',
            'busTag' => 'First Class',
            'busUrl' => 'http://127.0.0.1:8000/assets/buses/vip-001.jpg',
            'capacity' => 78,
            'filled' => 0,
            'schedule' => 'loading',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
