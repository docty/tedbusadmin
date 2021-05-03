<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            'reference' => '814551669',
            'busName' => 'VIP',
            'source' => 'Kumasi',
            'destination' => 'Accra',
            'passenger' => 1,
            'depDate' => '03/06/2021 09:00',
            'price' => '40.00',
            'status' => 'pending',
            'mobile' => '0247049416',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
