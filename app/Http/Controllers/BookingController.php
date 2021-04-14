<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Bus;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $model = Booking::where('status', 'pending')->get();
        return  view('Dashboard.bookings.pending', ['bookings' => $model]);
    }

    public function complete()
    {
        $model = Booking::where('status', 'complete')->get();
        return  view('Dashboard.bookings.complete', ['bookings' => $model]);
    }

    public function create()
    {
        return view('Dashboard.booking.create');
    }

    
    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->busName = $request->busName;
        $booking->source = $request->source;
        $booking->destination = $request->destination;
        $booking->passenger = $request->passenger;
        $booking->depDate = $request->dep_date;
        $booking->price = $request->price;
        $booking->status = 'pending';
        $booking->mobile = $request->mobile;
        $booking->save();
        return redirect()->route('bookings.index');
    }

    public function save(Request $request)
    {
        $booking = new Booking();
        $booking->busName = $request->busName;
        $booking->source = $request->source;
        $booking->destination = $request->destination;
        $booking->passenger = $request->passenger;
        $booking->depDate = $request->depDate;
        $booking->price = $request->price;
        $booking->status = 'pending';
        $booking->mobile = $request->mobile;
        $booking->save();
        return response()->json('Saved Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    ########### OTHER METHODS ##################
    public function confirmBooking(Request $request){
        $booking = Booking::find($request->id);
        $bus = Bus::where('schedule', 'loading')->where('busName', $request->busName)->first();
        //return $booking;
        if ($bus != null ) {
            $booking->numberPlate = $bus->numberPlate;
            $booking->status = 'complete';
            $bus->filled = intval($booking->passenger);
            $booking->save();
            $bus->save();
            
        }
        return redirect()->route('bookings.index');
    }

    public function tokenVerify(Request $request)
    {
        $secretKey = "6LeWRo4aAAAAAArGqa4NGXdLI7_KN6iIwNgSpZMh";
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $captcha = $request->token;
        $data = array('secret' => $secretKey, 'response' => $captcha);
        $options = array(
            'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($data)
            )
          );
        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $responseKeys = json_decode($response,true);
        header('Content-type: application/json');
          
        return response()->json(['status' => $responseKeys["success"]]);
    }
}
