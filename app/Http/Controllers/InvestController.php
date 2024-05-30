<?php

namespace App\Http\Controllers;
use App\Models\Invest;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    //
    public function formularioinvertido(){

        return view('frm_textinvertido');

}
public function invertir (Request $request){
    $text1=$request->input('text1');    
    echo strrev($text1);

    invest::create ([
        'text1'=>$text1,
        'text2'=>strrev($text1),
      ]); 
}
}

