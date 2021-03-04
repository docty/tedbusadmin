<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'firstName' => 'Developer',
            'lastName' => 'Hub',
            'mobile' => '0242727687',
            'gender' => 'Female',
            'staffId' => '4649415',
            'urlId' => '43mdaf-dwrw-424f-d-d',
            'address' => 'AK-256-5656, Tanoso-Kumasi',
            'email' => 'docty@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
