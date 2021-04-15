<?php

use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricings')->insert([
            'companyName' => 'Tedbus',
            'source' => 'Asafo Market',
            'destination' => 'Circle',
            'amount' => '60',
            'busTag' => 'First Class',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
