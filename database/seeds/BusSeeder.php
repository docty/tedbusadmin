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
            'companyName' => 'VIP',
            'numberPlate' => 'AS-324-2442',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
