<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Bus;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
      Show the application dashboard.
     */
    public function index()
    {
        $pending = Booking::where('status', 'pending')->count();
        $loading =  Bus::where('schedule', 'loading')->count();
        $moving =  Bus::where('schedule', 'moving')->count();
        $awaiting =  Bus::where('schedule', 'awaiting')->count();
        
        return view('Dashboard.index', ['pending' => $pending, 'loading' => $loading, 
        'moving' => $moving, 'awaiting' => $awaiting]);
    }
}
