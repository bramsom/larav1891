<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::orderBy('id', 'desc')->get();
        return view('producto.listar', compact('product'));

        //return $cursos;
    }
    public function create(){

        return view('producto.create');
    }
    public function store(Request $request){


      $producto =new Product();
        $producto->name=$request->name;
        $producto->price=$request->price;
        $producto->description=$request->description;
        $producto->cant=$request->cant;
        $producto->exp=$request->exp;
        $producto->save();
   
        return $producto;
}
}