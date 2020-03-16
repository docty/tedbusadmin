<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create();
        //factory(App\Staff::class, 1)->create();
        //factory(App\Customer::class, 1)->create();
        //factory(App\LoanBook::class, 1)->create();
        //factory(App\PaymentSchedule::class, 3)->create();
        // $this->call(UsersTableSeeder::class);
        
         
        
       
    }
}
