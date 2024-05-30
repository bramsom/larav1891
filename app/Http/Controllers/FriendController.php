<?php

namespace App\Http\Controllers;
use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    //
    public function formularioamigos(){

        return view('frm_amigos');

}
    public function amigos (Request $request){

        $num1=$request->input('num1');
        $num2=$request->input('num2');
   
        $acu1=0;
        $acu2=0;

        for ($i = 1; $i < $num1; $i++){
          
        if($num1 % $i==0){
            $acu1+=$i;
        }
        }
        for ($i = 1; $i < $num2; $i++){
        
        if($num2 % $i==0){
            $acu2+=$i;
        }
        }
       if($acu1==$num2 && $acu2==$num1){

        $amigo= new friend ([
            'num1'=>$num1,
            'num2'=>$num2,
            'tipo'=>'son amigos',
          ]); 
         $amigo->save();

        return $amigo;
       }
       else{
        $amigo= new friend([
            'num1'=>$num1,
            'num2'=>$num2,
            'tipo'=>'no son amigos',
          ]); 
         $amigo->save();
         return $amigo;

       }
    }
    
}

