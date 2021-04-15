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
        //factory(App\User::class, 1)->create();
 
        $this->call(UsersTableSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(RoutingSeeder::class);
        $this->call(PricingSeeder::class);
        $this->call(BusSeeder::class);
        $this->call(DriverSeeder::class);
        $this->call(BookingSeeder::class);
        
         
        
       
    }
}
