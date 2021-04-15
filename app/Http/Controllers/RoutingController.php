<?php

namespace App\Http\Controllers;

use App\Routing;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
     
    public function index()
    {
        $model = Routing::all();
        return  view('Dashboard.tools.route', ['partners' => $model]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Routing  $routing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Routing $routing)
    {
        //
    }
}
