<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PickupPlace;
use App\Destination;
use App\Rate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pickupPlaces = PickupPlace::all();
        $destinations = Destination::all();
        $rates = Rate::all();
        return view('home', ['pickupPlaces' => $pickupPlaces, 'destinations' => $destinations, 'rates' => $rates]);
    }
}
