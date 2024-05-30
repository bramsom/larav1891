<?php

namespace App\Http\Controllers;
use App\Models\Curso;
use app\Models\User;
use app\Models\Category;
use app\Models\Post;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function consultasElokuent(){
        $user = user:: find(1);
        return $user->posts;
    }

    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->get();
        return view('cursos.listar', compact('cursos'));

        //return $cursos;
    }
    public function create(){

        return view('cursos.create');
    }
    public function store(Request $request){


      $curso =new Curso();
        $curso->name=$request->name;
        $curso->descripcion=$request->descripcion;
        $curso->save();
   
        return $curso;
       
    }
}