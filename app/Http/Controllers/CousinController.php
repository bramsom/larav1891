<?php

namespace App\Http\Controllers;
use App\Models\Cousin;
use Illuminate\Http\Request;

class CousinController extends Controller
{
    public function formularioprimos(){

        return view('frm_primos');

}

public function primosStore(Request $request){
    

    $num1=$request->input('num1');

    $cont=0;

    for($k=1;$k<=$num1;$k++){
       
        if($num1 % $k==0){
           $cont++;
           
        }
   
    }
   
    if($cont==2)

     {
        $primo= new cousin([
        'num1'=>$num1,
        'tipo'=>'es primo'
        ]);
        $primo->save();

        return $primo;
               
     }
       else{

        $primo= new cousin([
        'num1'=>$num1,
        'tipo'=>'no es primo'
        ]);
        $primo->save();

        return $primo;
                         
        }    
   
    }
 }

