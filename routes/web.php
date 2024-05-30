<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/frminvertido',[InvestController::class,'formularioinvertido']);
Route::post('/invertidostore',[InvestController::class,'invertir'])->name('invertido.Store');

Route::get('/frmamigos',[FriendController::class,'formularioamigos']);
Route::post('/amigostore',[FriendController::class,'amigos'])->name('amigos.Store');

//Route::get('/frmcuadratica',[ResultController::class,'formulariocuadratica']);
//Route::post('/cuadraticastore',[ResultController::class,'cuadraticaStore'])->name('cuadratica.store');

//Route::get('/frmprimos',[CousinController::class,'formularioprimos']);
//Route::post('/primosstore',[CousinController::class,'primosStore'])->name('primos.Store');

Route::get('cursos/listar',[CursoController::class,'index'])->name('cursos.index');
Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store',[CursoController::class,'store'])->name('cursos.store');
Route::get('consultas',[CursoController::class,'consultasElokuent']);

Route::get('productos/listar',[ProductController::class,'index'])->name('cursos.index');
Route::get('productos/create',[ProductController::class,'create']);
Route::post('productos/store',[ProductController::class,'store'])->name('productos.store');

Route::get('usuario/asociar_rol',[RoleUserController::class,'asociar']);
Route::post('usuario/asociar_rol/store',[RoleUserController::class,'store'])->name('role_user.store');

route::get('consultas',[CursoController::class,'consultasElokuent']);

Route::get('camionero/asociar_rol',[TruckTrukerController::class,'asociar']);
Route::post('camionero/asociar_rol/store',[TruckTrukerController::class,'store'])->name('truck_trucker.store');