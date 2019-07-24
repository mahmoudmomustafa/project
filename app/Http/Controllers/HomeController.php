<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipment;
use App\Customer;
use App\Recevier;
use App\User;

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
        $drivers = User::where('type','driver')->get();
        $customers = Customer::get();
        $receviers = Recevier::get();
        $shipments = Shipment::get();
        return view('dashboard',compact('shipments','drivers','customers','receviers'));
    }
}
