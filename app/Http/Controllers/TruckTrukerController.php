<?php

namespace App\Http\Controllers;

use App\Models\truck;
use App\Models\trucker;

use Illuminate\Http\Request;

class TruckTrukerController extends Controller
{
    //
    public function asociar(){

        $trucks = truck::all();
        $trucks = trucker::all();
       
        return view('truck_truker.asociar',compact('trucks','truckers'));

    }

    public function store(Request $request){

        $truck=truck::find($request->truck_id);
        $truck->truckers()->attach($request->trucker_id);

        return 'accion realizada con exito';

    }

}


