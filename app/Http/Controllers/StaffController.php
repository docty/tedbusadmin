<?php

namespace App\Http\Controllers;

use App\Http\Extras\StaffDemit;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStaff;

class StaffController extends Controller
{
    /*
      Display a listing of all Users
    */
    public function index()
    {
        $http = new  \GuzzleHttp\Client();
        $response = $http->get('http://127.0.0.1:8100/api/users');
        $result = $response->getBody()->getContents();
        $model = json_decode($result, true);
       
        return  view('Dashboard.users.index', ['users' => $model]);
    }

    /*
     *  Register a new staff
     */

    public function create()
    {
         
        return view('Dashboard.staff.create');
    }

    /*
     * Store a newly created staff 
     */

    public function store(StoreStaff $request)
    {
        $validated = $request->validated();

        $staff = new Staff();
        $staff->urlId = StaffDemit::staffUrl($request);
        $staff->surname = $request->lastname;
        $staff->otherName = $request->firstname;
        $staff->phoneNumber = $request->contact;
        $staff->gender = $request->gender;
        $staff->staffId = random_int(1000000,9999999);
        $staff->save();

        return redirect()->route('staff.index');
    }

    /*
     * Display the specified user.
     */
    public function show($userId)
    {    
        $http = new  \GuzzleHttp\Client();
        $response = $http->get('http://127.0.0.1:8100/api/users/'.$userId);
        $result = $response->getBody()->getContents();
        $model = json_decode($result, true);
        
        return view('Dashboard.users.profile', ['staff' => $model]);
       
        
    }

    /* 
     * Edit the specified staff 
     */

    public function edit($staffId)
    {
        $staff = Staff::where('urlId', $staffId)->first();
        if ($staff) {
             return view('Dashboard.staff.edit' , ['staff' => $staff]);
         
        }else{
            return "Present the 404 page";
        }
    }

    /*
     * Update the specified staff
    */
    
    public function update(Request $request, Staff $staff)
    {
         $staff->surname = $request->lastname;
        $staff->otherName = $request->firstname;
        $staff->phoneNumber = $request->contact;
        $staff->staffId = $request->staffId;
        $staff->gender = $request->gender;
        $staff->save();

        return redirect()->route('staff.show', $staff->urlId);
    }

    /**
     * Remove the specified User from storage.
     
     */
    public function destroy($staff)
    {
        $http = new  \GuzzleHttp\Client();

        $response = $http->delete('http://127.0.0.1:8100/api/users?id='.$staff)->send();

       return redirect()->route('users.index');
    }
}
