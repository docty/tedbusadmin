<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $model = Booking::all();
        return  view('Dashboard.bookings.index', ['bookings' => $model]);
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
        $booking->noOfChildren = $request->noOfChildren;
        $booking->save();
        return redirect()->route('bookings.index');
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
}
