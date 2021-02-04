<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Resources\Customer as UserResource;
class CustomerController extends Controller
{
    /*
     * Display a listing of all customers
     */
    public function index()
    {
         $baseUrl = 'http://127.0.0.1:8100';
        //$baseUrl = "https://tedbus.herokuapp.com";

       $http = new  \GuzzleHttp\Client();

        $response = $http->get($baseUrl.'/api/busbooking');
        $result = $response->getBody()->getContents();
        $model = json_decode($result, true);
          
       return  view('Dashboard.busbooking.index', ['customer' => $model]);
    }

    /*
     *  Register a new customer
     */

    public function create()
    {
        return view('Dashboard.customer.create');
    }

    /*
     * Store a new customere
     */
    public function store(Request $request)
    {
        $microtime = microtime();
        $comps = explode(' ', $microtime);
        $content = $request->contact.''.$request->surname.$comps[1];
        
        $customer = new Customer();
        $customer->urlId = md5($content);
        $customer->surname = $request->lastname;
        $customer->staffId = $request->officerId;
        $customer->otherName = $request->firstname;
        $customer->phoneNumber = $request->contact;
        $customer->gender = $request->gender;
        $customer->customerId = random_int(1000000,9999999);
        $customer->save();

        return redirect()->route('customer.index');
    }

    /*
     * Display the specified customer.
     */
    public function show($customerId) 
    {

        $customer = Customer::with(["loan", 'payment', 'staff'])->where('urlId', $customerId)->first();
        
        if ($customer) {
            return view('Dashboard.customer.profile', ['customer' => $customer]);
        }else{
            return "Present the 404 page";
         }
        
    }

    /* 
     * Edit the specified customer 
     */

    public function edit($customerId)
    {
        $customer = Customer::where('urlId', $customerId)->first();
        if ($customer) {
            return view('Dashboard.customer.edit' , ['customer' => $customer]);
        }else{
            return "Present the 404 page";
        }
       
        
    }

    /*
     * Update the specified Customer
    */
    public function update(Request $request, Customer $customer)
    {
         $customer->surname = $request->lastname;
        $customer->otherName = $request->firstname;
        $customer->phoneNumber = $request->contact;
        $customer->customerId = $request->customerId;
        $customer->gender = $request->gender;
        $customer->save();

        return redirect()->route('customer.show', $customer->urlId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
