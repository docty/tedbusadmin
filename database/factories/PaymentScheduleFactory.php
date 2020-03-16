<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PaymentSchedule;
use Faker\Generator as Faker;





$factory->define(PaymentSchedule::class, function (Faker $faker) {
    return [
    	'userId' => 987654321,
         'amount' => 9876541,
         
    ];
});
