<?php

namespace App\Http\Controllers;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //funciones dentro del controlador:

  public function formulariocuadratica(){

    return view('frm_cuadratica');

}

public function cuadraticaStore(Request $request){

    $a=$request->input('a');
    $b=$request->input('b');
    $c=$request->input('c');

    $p= ($b*$b)-(4*$a*$c);

    if(  $a!=0 && $p >=0){
        $x1=(-$b+sqrt($p))/(2*$a);
        $x2=(-$b-sqrt($p))/(2*$a);

        $result= new Result ([
            'a'=>$a,
            'b'=>$b,
            'c'=>$c,
            'x1'=>$x1,
            'x2'=>$x2,
          ]); 
         $result->save();
          return $result;
       
    }else {

          return 'no hay soluciones reales';
        }

    }

}
