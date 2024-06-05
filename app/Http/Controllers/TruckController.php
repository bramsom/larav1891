<?php

namespace App\Http\Controllers;
use App\Models\Truck;
use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckController extends Controller
{
    //

        
    public function asociar(){

        $trucks = Truck::all();
        $truckers = Trucker::all();
       
        return view('truck_truker.asociar',compact('trucks','truckers'));

    }

    public function store(Request $request){

        $truck = Truck::find($request->truck_id);

        $truck->trucker()->attach($request->trucker_id);

        return " SE ACREADO UNA NUEVA ASOCIOACION";
    }
}
