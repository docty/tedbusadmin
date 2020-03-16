<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    return [
    	'urlId' => md5('233-546-876-245'.$faker->lastName),
        'surname' => 'Asiedu',
        'otherName' => 'Henry Kwasi',
        'phoneNumber' => '233-247-049-416',
        'gender' => 'Male',
        'staffId' => 4649415
    ];
});
