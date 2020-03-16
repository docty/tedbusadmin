<?php

namespace App\Http\Controllers;

use App\LoanBook;
use Illuminate\Http\Request;

class LoanBookController extends Controller
{
    /*
     * Display a listing of all loan customers
     */
    public function index()
    {
        $model = LoanBook::with(['customer', 'staff'])->get();
        
        return  view('Dashboard.loanbook.index', ['loanbook' => $model]);
    }

    /*
     *  Register a new loan
     */

    public function create()
    {
        return view('Dashboard.loanbook.create');
    }

    /*
     * Display the specified loan.
     */
    public function show($loanbookId)
    {

        $loanbook = LoanBook::with(['customer', 'staff'])->where('urlId', $loanbookId)->first();
         
         
        return view('Dashboard.loanbook.profile', ['loanbook' => $loanbook]);
    }


    /*
     * Store a newly created loan 
     */

    public function store(Request $request)
    {
        
        $microtime = microtime();
        $comps = explode(' ', $microtime);
        $randomValue = random_int(10000000,99999999);
        $content = $request->customerId.''.$randomValue.$comps[1];

        $loanBook = new LoanBook();
        $loanBook->customerId = $request->customerId;
        $loanBook->urlId = md5($content);
        $loanBook->loanId = random_int(10000000,99999999);
        $loanBook->startDate = $request->startDate;
        $loanBook->months = $request->months;
        $loanBook->paymentType = $request->paymentType;
        $loanBook->principal = $request->principal;
        $loanBook->interestRate = $request->interestRate;
        $loanBook->totalAmount = $request->totalPayment;
        $loanBook->staffId = $request->officerName;
        $loanBook->LoanReason = $request->loanReason;
        
       
        try {
            $loanBook->save();
            return redirect()->route('loan.index');
    
        } catch (\Exception $e) {
            return redirect()->route('loan.create');
        }
        
    }

    /* 
     * Edit the specified loan 
     */

    public function edit($loanbookId)
    {
        $loanbook = LoanBook::find($loanbookId);
        return view('Dashboard.loanbook.edit' , ['loanbook' => $loanbook]);;
    }


     /*
     * Update the specified loan
    */
    public function update(Request $request, LoanBook $loanbook)
    {
        $loanbook->startDate = $request->startDate;
        $loanbook->months = $request->months;
        $loanbook->paymentType = $request->paymentType;
        $loanbook->principal = $request->principal;
        $loanbook->save();

        return redirect()->route('loan.show', $loanbook->id);
    }


    public function destroy(LoanBook $loanBook)
    {
        //
    }
}
