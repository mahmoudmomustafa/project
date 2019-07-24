<?php

namespace App\Http\Controllers;

use App\Exports\ShipmentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Shipment;
use App\Customer;
use App\ShipmentState;
use Illuminate\Http\Request;
use App\Recevier;

class ShipmentController extends Controller
{
    // exports
    public function export()
    {
        return Excel::download(new ShipmentExport, 'shipments.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipments = Shipment::get();
        return view('pages.shipment.index', compact('shipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::get();
        $shipmentStates = ShipmentState::get();
        return view('pages.shipment.create', compact('customers', 'shipmentStates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // Shipment
            'shipmentNum' => ['required', 'unique:shipments'],
            'type' => ['required'],
            'weight' => ['required'],
            'width' => ['required'],
            'quantity' => ['required'],
            'paymentMethod' => ['required'],
            'price' => ['required'],
            'pickupDate' => ['required'],
            // recevie
            'companyName' => ['required'],
            'accountNum' => ['required', 'unique:receviers'],
            'name' => ['required'],
            'mobile' => ['required'],
            'address' => ['required'],
            'postal' => ['required'],
        ]);
        // Recevier
        $recevier =  request(['companyName', 'accountNum', 'name', 'mobile', 'address', 'postal']);
        $recevier = new Recevier($recevier);
        $recevier->save();
        $shipment =  request([
            'shipmentNum', 'type', 'weight', 'width', 'quantity', 'paymentMethod', 'price', 'pickupDate', 'state_id', 'recevier_id', 'customer_id'
        ]);
        $shipment['recevier_id'] = $recevier->id;
        Shipment::create($shipment);
        return redirect('/dashboard/shipments')->with('message', 'New Shipment was created');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function show(Shipment $shipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipment $shipment)
    {
        $customers = Customer::get();
        $shipmentStates = ShipmentState::get();
        return view('pages/shipment/edit', compact('customers', 'shipmentStates', 'shipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipment $shipment, Recevier $recevier)
    {
        $shipment->update($request->all());
        return redirect('/backend/shipments')->with('message', 'Shipment was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipment  $shipment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipment = Shipment::findOrFail($id);
        $shipment->delete();
        return redirect('/dashboard/shipments')->with('message', 'Shipment was Deleted');
    }
    // show recevies
    public function showRecevies()
    {
        $receviers = Recevier::get();
        return view('pages.receviers', compact('receviers'));
    }
    // public function toDriver()
    // {
    //     $drivers = User::where('type','driver');
    //     $shipments = Shipment::get();
    //     return view('pages.shipmentAndDriver',compact('shipments','drivers'));
    // }
}
