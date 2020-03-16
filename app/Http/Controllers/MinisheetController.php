<?php

namespace App\Http\Controllers;
use App\PaymentSchedule;
use Illuminate\Http\Request;

class MinisheetController extends Controller
{
    

    public function payment(Request  $request)
    {
     
     	$payment_schedule = new PaymentSchedule();
    	$http = new  \GuzzleHttp\Client();
        $response = $http->get('http://127.0.0.1:8100/api/makepayment/'.$request->busId);
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
