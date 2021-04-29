<?php

namespace App\Http\Controllers;
use App\Partner;
use App\Routing;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
     
    public function index()
    {
        $model = Routing::all();
        return  view('Dashboard.tools.route', ['partners' => $model]);
    }

     
    public function create()
    {
        $partners = Partner::get('companyName');
        return view('Dashboard.tools.route_create', ['partners' => $partners]);
    }

    
    public function store(Request $request)
    {
        $routing = new Routing();
        $routing->companyName = $request->companyName;
        $routing->sourceRegion = $request->sourceRegion;
        $routing->source = $request->source;
        $routing->destinationRegion = $request->destinationRegion;
        $routing->destination = $request->destination;
        $routing->save();
        return redirect()->route('route.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Routing  $routing
     * @return \Illuminate\Http\Response
     */
    public function show(Routing $routing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Routing  $routing
     * @return \Illuminate\Http\Response
     */
    public function edit(Routing $routing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Routing  $routing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Routing $routing)
    {
        //
    }

    public function destroy($routing)
    {
        $routing = Routing::find($routing);
        $routing->delete();
        return redirect()->route('route.index');
    }
}
