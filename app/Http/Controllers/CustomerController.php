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
      //   $baseUrl = 'http://127.0.0.1:8100';
        //$baseUrl = "https://tedbus.herokuapp.com";

    //    $http = new  \GuzzleHttp\Client();

    //     $response = $http->get($baseUrl.'/api/busbooking');
    //     $result = $response->getBody()->getContents();
    //     $model = json_decode($result, true);
        $model = Customer::all();
       return  view('Dashboard.customers.index', ['customers' => $model]);
    }

    /*
     *  Register a new customer
     */

    public function create()
    {
        return view('Dashboard.customers.create');
    }

    /*
     * Store a new customere
     */
    public function store(Request $request)
    {
        $microtime = microtime();
        $comps = explode(' ', $microtime);
        $content = $request->mobile.''.$request->lastName.$comps[1];
        $customer = new Customer();
        $customer->urlId = md5($content);
        $customer->lastName = $request->lastName;
        $customer->firstName = $request->firstName;
        $customer->mobile = $request->mobile;
        $customer->email = $request->email;
        $customer->customerId = random_int(1000000,9999999);
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function save(Request $request)
    {
        $microtime = microtime();
        $comps = explode(' ', $microtime);
        $content = $request->mobile.''.$request->lastName.$comps[1];
        $customer = new Customer();
        $customer->urlId = md5($content);
        $customer->lastName = $request->lastName;
        $customer->firstName = $request->firstName;
        $customer->mobile = $request->mobile;
        $customer->email = $request->email;
        $customer->customerId = random_int(1000000,9999999);
        $customer->save();
        return response()->json('Saved Successfully');
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

    
    public function destroy(Request $request)
    {
        $customer = Customer::where('customerId', $request->customerId)->first();
        $customer->delete();
        return redirect()->route('customers.index')->with('message','Custome profile successfully deleted.');
    }
}
