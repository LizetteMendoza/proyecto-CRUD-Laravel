<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;

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

Route::resource('/tareas', TareasController::class);

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
