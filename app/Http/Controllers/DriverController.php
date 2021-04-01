<?php

namespace App\Http\Controllers;

use App\Driver;
use App\Partner;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $model = Driver::all();
        return  view('Dashboard.drivers.index', ['drivers' => $model]);
    }

    public function create()
    {
        $partners = Partner::get('companyName');
        return view('Dashboard.drivers.create', ['partners' => $partners]);
    }

    
    public function store(Request $request)
    {
        $driver = new Driver();
        $driver->companyName = $request->companyName;
        $driver->driverName = $request->driverName;
        $driver->phoneNumber = $request->phoneNumber;
        return $request->all();
        $driver->save();
        return redirect()->route('drivers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
