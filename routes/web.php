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
Route::get('/bus-loading', 'BusController@getLoading');
Route::get('/bus-moving', 'BusController@getMoving');
Route::get('/bus-awaiting', 'BusController@getAwaiting');
Route::get('/set-bus-action', 'BusController@setBusInAction');
Route::get('/all-bus', 'BusController@getAllBus');
Route::get('/booking-confirm', 'BookingController@confirmBooking');
Route::get('/booking-complete', 'BookingController@complete');
Route::post('/payment', 'MinisheetController@payment')->name('payment');
Route::get('/payment', 'MinisheetController@paymentindex')->name('payment_index');
Route::resource('/route', 'RoutingController');
Route::resource('/price', 'PricingController');
 
});  