<?php

use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'companyName' => 'VIP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
