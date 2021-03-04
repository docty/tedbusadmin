<?php

namespace App\Http\Controllers;

use App\Http\Extras\StaffDemit;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStaff;

class StaffController extends Controller
{

    public function constructor()
    {
        //$baseUrl = "https://tedbus.herokuapp.com";
        $localUrl = 'http://127.0.0.1:8100';
    }

    public function index()
    {
        $model = User::all();
        return  view('Dashboard.users.index', ['users' => $model]);
    }

    public function create()
    {
        return view('Dashboard.users.create');
    }

    public function store(Request $request)
    {
        $staff = new User();
        $staff->urlId = StaffDemit::staffUrl($request);
        $staff->firstName = $request->firstName;
        $staff->lastName = $request->lastName;
        $staff->mobile = $request->mobile;
        $staff->email = $request->email;
        $staff->password = random_int(1000000,9999999);
        $staff->gender = $request->gender;
        $staff->address = $request->address;
        $staff->staffId = random_int(1000000,9999999);
        $staff->save();
        return redirect()->route('staff.index');
    }

    /*
     * Display the specified user.
     */
    public function show($userId)
    {    
        $baseUrl = 'http://127.0.0.1:8100';
        //$baseUrl = "https://tedbus.herokuapp.com";

        $http = new  \GuzzleHttp\Client();
        $response = $http->get($baseUrl.'/api/users/'.$userId);
        $result = $response->getBody()->getContents();
        $model = json_decode($result, true);
        
        return view('Dashboard.users.profile', ['staff' => $model]);
       
        
    }

    /* 
     * Edit the specified staff 
     */

    public function edit($staffId)
    {
        // $staff = Staff::where('urlId', $staffId)->first();
        // if ($staff) {
        //      return view('Dashboard.users.edit' , ['staff' => $staff]);
         
        // }else{
        //     return "Present the 404 page";
        // }
    }

    /*
     * Update the specified staff
    */
    
    public function update(Request $request, Staff $staff)
    {
        //  $staff->surname = $request->lastname;
        // $staff->otherName = $request->firstname;
        // $staff->phoneNumber = $request->contact;
        // $staff->staffId = $request->staffId;
        // $staff->gender = $request->gender;
        // $staff->save();

        // return redirect()->route('staff.show', $staff->urlId);
    }

    /**
     * Remove the specified User from storage.
     
     */
    public function destroy($staff)
    {
    //     $http = new  \GuzzleHttp\Client();

    //     $response = $http->delete('http://127.0.0.1:8100/api/users?id='.$staff)->send();

    //    return redirect()->route('users.index');
     
     }
}
