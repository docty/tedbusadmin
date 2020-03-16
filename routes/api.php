<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// To be released soon
 // Route::apiResource('/customer', 'CustomerController');
 // Route::apiResource('/loanbook', 'LoanBookController');
 // Route::apiResource('/payment_schedule', 'PaymentScheduleController');
 // Route::apiResource('/staff', 'StaffController');
