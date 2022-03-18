<?php

use App\Models\Juego;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\\Http\\Controllers\JuegoController@index');
Route::post('/juego/deletejuego', 'App\\Http\\Controllers\JuegoController@deleteJuego');
Route::post('/juego', function (Request $request) {
    //Crea las reglas en $rules o las incluyo directamente
    //Crea los mensajes o no
    $normas = array(
        'juego' => 'required|max:255',
        'tipo' => 'required|max:255',
        'fecha' => 'required|date'
    );
    $validator = Validator::make($request->all(), $normas);
    if ($validator->fails()) {
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }
        $juego = new Juego();
        $juego->juego = $request->juego;
        $juego->tipo = $request->tipo;
        $juego->fecha = $request->fecha;
        $juego->save();
        return redirect('/')->withInput();
    });