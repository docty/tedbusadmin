<?php

namespace App\Http\Controllers;
use App\LoanBook;
use App\PaymentSchedule;
use Illuminate\Http\Request;

class PaymentScheduleController extends Controller
{
    /*
     * Display a listing of all payment.
     */
    public function index()
    {
        return PaymentSchedule::all();
    }

    /*
     *  Register a new payment
     */

    public function create()
    {
        return view('Dashboard.payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaner = LoanBook::where('loanId', $request->loanId)->get();
        $schedule = PaymentSchedule::with('loan')->where('loanId', $request->loanId)->latest()->first();
        $cBalance = 0; $debt = $loaner[0]->totalAmount;
           
        if ($schedule != '') {
             $cBalance = $schedule->cBalance;
             $debt = $schedule->debt;
        }
         
        $payment = new PaymentSchedule();
        $payment->loanId = $request->loanId;
        $payment->customerId = $request->customerId;
        $payment->staffId = $request->staffId;
        $payment->paid = $request->amount;
        $payment->cBalance=   $cBalance + $request->amount;
        $payment->debt =  $debt - $request->amount;
        $payment->save();
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentSchedule  $paymentSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentSchedule $paymentSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentSchedule  $paymentSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentSchedule $paymentSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentSchedule  $paymentSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentSchedule $paymentSchedule)
    {
        //
    }
}
