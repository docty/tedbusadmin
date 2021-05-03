<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Booking;
use App\Partner;
use App\Pricing;
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
        $partners = Partner::get('companyName');
        return view('Dashboard.buses.create', ['partners' => $partners]);
    }

    public function store(Request $request)
    {
        $bus = new Bus();
        $bus->companyName = $request->companyName;
        $bus->numberPlate = $request->numberPlate;
        $bus->busName = $request->busName;
        $bus->busUrl = 'http://127.0.0.1:8000/assets/buses/vip-001.jpg';
        $bus->capacity = $request->capacity;
        $bus->schedule = 'awaiting';
        $bus->busTag = $request->busTag;
        $bus->filled = 0;
        $bus->save();
        return redirect()->route('buses.index');
    }

    
    public function show($bus)
    {
        
        $data = Bus::find($bus);
        
        //$data->schedule = 'loading';
        //$data->save();
        //return $data;
        return view('Dashboard.buses.profile', ['data' => $data]);
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
    public function destroy( $id)
    {
        $bus = Bus::find($id);
        $bus->delete();
        return redirect()->route('buses.index');
    }
 
    #####    OTHER USEFUL METHODS #####################
    public function getLoading(){
        $model = Bus::where('schedule', 'loading')->get();
         
        return  view('Dashboard.buses.loading', ['buses' => $model]);
    }

    public function getMoving(){
        $model = Bus::where('schedule', 'moving')->get();
        foreach ($model as $key => $value) {
            $model[$key]['filled'] = Booking::where('numberPlate', $value->numberPlate)->count();
        }
        return  view('Dashboard.buses.moving', ['buses' => $model]);
    }

    public function getAwaiting(){
        $model = Bus::where('schedule', 'awaiting')->get();
        foreach ($model as $key => $value) {
            $model[$key]['filled'] = 0;
        }
        return  view('Dashboard.buses.awaiting', ['buses' => $model]);
    }

    public function setBusInAction(Request $request)
    {
        $model = Bus::where('id', $request->id)->first();
        $model->schedule = $request->action;
        if ($request->action === 'awaiting')
            $model->filled = 0;
        $model->save();
        return response()->json('Saved Successfully');
    }

    public function getAllBus(Request $request)
    {
        $source = $request['source'];
        $destination = $request['destination'];
        
        $bus = Bus::all();

        $allbus = [];
        $busName = [];

        foreach ($bus as $key => $value) {
            $busName[$value->busName] = $value->busName;
        }
        
        foreach ($busName as $key => $value) {
            $result = [];
            $bumit = [];
            $data = Bus::where('busName', $value)->get(['busTag', 'busUrl']);
            foreach ($data as $key => $item) {
                $price = Pricing::where('busTag', $item->busTag)->first();
                $result[$price['amount']] = $item->busUrl;
            }
            foreach ($result as $key => $remind) {
                $bumit[] = ['price' => $key, 'url' => $remind, 'name' => $value];
            }

            $allbus[] =   [$value => $bumit];
        }
        return $allbus;
         
    }
}
