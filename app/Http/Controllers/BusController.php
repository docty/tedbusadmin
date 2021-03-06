<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Booking;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $model = Bus::all();
        return  view('Dashboard.buses.index', ['buses' => $model]);
    }

    public function create()
    {
        return view('Dashboard.buses.create');
    }

    
    public function store(Request $request)
    {
        $bus = new Bus();
        $bus->companyName = $request->companyName;
        $bus->numberPlate = $request->numberPlate;
        $bus->capacity = $request->capacity;
        $bus->schedule = 'awaiting';
        $bus->save();
        return redirect()->route('buses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bus)
    {
        //
    }

    #####    OTHER USEFUL METHODS #####################
    public function getLoading(){
        $model = Bus::where('schedule', 'loading')->get();
        foreach ($model as $key => $value) {
           $model[$key]['filled'] = Booking::where('numberPlate', $value->numberPlate)->count();
        }
        return  view('Dashboard.buses.loading', ['buses' => $model]);
    }

    public function getMoving(){
        $model = Bus::where('schedule', 'moving')->get();
        return  view('Dashboard.buses.moving', ['buses' => $model]);
    }

    public function getAwaiting(){
        $model = Bus::where('schedule', 'awaiting')->get();
        return  view('Dashboard.buses.awaiting', ['buses' => $model]);
    }
}
