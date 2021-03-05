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
            'busName' => 'VIP',
            'source' => 'Kumasi',
            'destination' => 'Accra',
            'noOfChildren' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
