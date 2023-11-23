<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
//Ejemplo vista 
//Route::get('/', function () {
//    return view('vista1', ['nombre'=>'Juan']);
//});
//Ejemplo validacion vistas
//if(View::exists('vista1')){
//    Route::get('/', function () {
//        return view('vista1');
//    });
//}else{
//    Route::get('/', function () {
//        return '<h1>No existe la vista</h1>';
//    });
//}

//Route::get('/', function () {
//   $users = ['Juan','Ana','Pedro','Maria'];
//    return view('vista1')->with('users',$users);
//});

//Route::resource('/','App\Http\Controllers\PersonaController');

//Ejemplo controlador
//Route::get('/','App\Http\Controllers\InicioController@index'); 

//Ejemplo Parametro
Route::get('/nombre/{nombre}', function ($nombre) {
    return '<h1>El nombre del cliente es: '.$nombre.'</h1>';
});

//Ejemplo Parametro por defecto
Route::get('/cliente/{cliente?}', function ($cliente='Cliente por defecto') {
    return '<h1>El cliente es: '.$cliente.'</h1>';
});

//Ejemplo validando
Route::get('/usuario/{usuario}', function ($usuario) {
    return '<h1>El usuario es: '.$usuario.'</h1>';
})->where('usuario','[0-9]+');

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::get('/dash/crud', function() {
    return view('crud.index');
});

Route::get('/dash/crud/create', function() {
    return view('crud.create');
});

Route::resource('personas','App\Http\Controllers\PersonaController');