<?php

namespace App\Http\Controllers;
use App\Partner;
use App\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
     
    public function index()
    {
        $model = Pricing::all();
        return  view('Dashboard.tools.price', ['price' => $model]);
    }

    
    public function create()
    {
        $partners = Partner::get('companyName');
        return view('Dashboard.tools.price_create', ['partners' => $partners]);
    }

    
    public function store(Request $request)
    {
        $pricing = new Pricing();
        $pricing->companyName = $request->companyName;
        $pricing->source = $request->source;
        $pricing->destination = $request->destination;
        $pricing->busTag = $request->busTag;
        $pricing->amount = $request->amount;
        $pricing->save();
        return redirect()->route('price.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        //
    }

    
    public function destroy($pricing)
    {
        $pricing = Pricing::find($pricing);
        $pricing->delete();
        return redirect()->route('price.index');
    }
}
