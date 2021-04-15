<?php

namespace App\Http\Controllers;

use App\Http\Extras\StaffDemit;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStaff;

class StaffController extends Controller
{

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
        
        return redirect()->route('users.index');
    }

    /*
     * Display the specified user.
     */
    public function show($userId)
    {    
        $model = User::find($userId);
        // $baseUrl = 'http://127.0.0.1:8100';
        // //$baseUrl = "https://tedbus.herokuapp.com";

        // $http = new  \GuzzleHttp\Client();
        // $response = $http->get($baseUrl.'/api/users/'.$userId);
        // $result = $response->getBody()->getContents();
        // $model = json_decode($result, true);
        
         return view('Dashboard.users.profile', ['staff' => $model]);
       
        
    }


    public function edit($staffId)
    {
        return abort(500);
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
        $staff =  User::find($staff);
        $staff->delete();
        return redirect()->route('users.index');
     
    }

    private function sendEmail($email) {
        $message = 'Congratulation, \n Your account has been created successfullly \n
                    Use the link below to set your password';
        $link = 'https://tedbusadmin.com/password-reset?email='.$email;
    }

    public function passwordUpdate(Request $request) {
        $staff = User::where('email', $request->email)->first();
        $staff->password = $request->password;
        $staff->save();
        return redirect()->route('login');
    }
}
