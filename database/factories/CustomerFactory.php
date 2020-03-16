<?php

/** Customer Factory Generator */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
    	'urlId' => md5('233-546-876-245'.$faker->lastName),
        'surname' => 'Osei',
        'customerId' => 9876541,
        'staffId' =>  4649415,
        'otherName' => 'Theophillia Senior',
        'gender' => 'Female',
        'phoneNumber' => '233-543-876-246'
    ];
});
