<?php

namespace App\Http\Controllers;
use App\PaymentSchedule;
use Illuminate\Http\Request;

class MinisheetController extends Controller
{
    

    public function payment(Request  $request)
    {
        $baseUrl = "https://tedbus.herokuapp.com";
       $localUrl = 'http://127.0.0.1:8100';

     	$payment_schedule = new PaymentSchedule();
    	$http = new  \GuzzleHttp\Client();
        $response = $http->get($baseUrl.'/api/makepayment/'.$request->busId);
       	$payment_schedule->busId = $request->busId;
       	$payment_schedule->amount  = $request->amount;
       	$payment_schedule->save();
       return redirect()->route('busbooking.index');
    }

    public function paymentindex()
    {
    	$model = PaymentSchedule::all();
    	 
    	return view('Dashboard.payment.index', ['staff' => $model]);
    }
}
