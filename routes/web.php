<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TareaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas', [TareaController::class,'index']);

Route::get('/tareas/create', [TareaController::class,'create']);

Route::post('/tareas/store',function(){
    //Validacoin y limpieza
    //Guardar DB
    //Redirigir
});

Route::get('/hola-mundo', function () {
    return view('paginas.Hola-mundo');
});

Route::get('/grabaciones', function(){
    return view('paginas.grabaciones');
});



Route::get('/grabaciones/{nombre}/{year?}/{cantidad?}', function ($nombre, $year=null, $cantidad =10) {
    /*dd($nombre); verificar si tengo la variable*/
    return view('paginas.grabaciones', compact('nombre', 'year', 'cantidad')); /* operador punto para directorios o archivos */
    /*Compact pasa la varible como texto
    -> with(['nombre]=> $nombre, 'otra => 'otra variable);
    
    */
});                                  //->with(['nombre' => $nombre]); te deja pasar mas variables tambien 

Route::get('/tareas/indexTareas', function(){
    return view('/paginas.indexTareas');
});