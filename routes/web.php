<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/users', 'StaffController');
Route::resource('/customers', 'CustomerController');
Route::resource('/partners', 'PartnerController');
Route::resource('/buses', 'BusController');
Route::resource('/drivers', 'DriverController');
Route::resource('/bookings', 'BookingController');
Route::post('/payment', 'MinisheetController@payment')->name('payment');
Route::get('/payment', 'MinisheetController@paymentindex')->name('payment_index');
 
});  