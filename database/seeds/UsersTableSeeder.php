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
            'phoneNumber' => '0242727687',
            'gender' => 'Female',
            'address' => 'AK-256-5656, Tanoso-Kumasi',
            'email' => 'docty@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
