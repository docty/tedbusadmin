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
            'firstName' => 'Test',
            'lastName' => 'Admin',
            'mobile' => '0241111110',
            'gender' => 'Female',
            'staffId' => '4649415',
            'urlId' => '43mdaf-dwrw-424f-d-d',
            'address' => 'AK-256-5656, Tanoso-Kumasi',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
