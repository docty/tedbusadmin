<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LoanBook;
use Faker\Generator as Faker;

$factory->define(LoanBook::class, function (Faker $faker) {
    return [
        'urlId' => md5('233-546-876-245'.$faker->lastName),
        'customerId' => 9876541,
        'loanId' => 987654321,
        'startDate' => '01-02-2020',
        'months' => 11,
        'paymentType' => 'Weekly',
        'principal' => 400.00,
        'interestRate' => 10,
        'totalAmount' => 440.00,
        'staffId' => 4649415,
        'LoanReason' => 'I need loan to buy an iPhone 11 Pro Max'
    ];
});
