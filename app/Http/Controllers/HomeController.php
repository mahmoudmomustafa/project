<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;
use App\Customer;
use App\Recevier;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\ShipmentState;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $drivers = User::where('type', 'driver')->get();
        $customers = Customer::get();
        $receviers = Recevier::get();
        $shipments = Shipment::get();
        $shipmentStates = ShipmentState::get();
        if(Auth::user()->type == 'admin'){ 
        return view('dashboard', compact('shipments','shipmentStates', 'drivers', 'customers', 'receviers'));
        }else {
            return abort(403);
        }
    }
    public function show()
    {
        // Auth::user();
        $shipments = Shipment::where('driver_id', Auth::user()->id)->get();
        return view('pages.user.show', compact('shipments'));
    }
}
