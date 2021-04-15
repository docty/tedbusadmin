<?php

use Illuminate\Database\Seeder;

class RoutingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routings')->insert([
            'companyName' => 'Tedbus',
            'source' => 'Asafo Market',
            'sourceRegion' => 'Ashanti',
            'destination' => 'Circle',
            'destinationRegion' => 'Accra',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
