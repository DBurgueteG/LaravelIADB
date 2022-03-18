<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use Illuminate\Support\Facades\Validator;

class JuegoController extends Controller
{
    public function index() {
        $juegos = Juego::all();
        return view('juegos1', ['juegos'=>$juegos]);
    }

    public function addJuego(Request $request) {
        
    }

    public function deleteJuego(Request $request) {
        $normas = ["id_juego" => "integer"];
        $validator = Validator::make($request->all(), $normas);
        if ($validator->fails()) {
            return redirect('/')
            ->withErrors($validator);
        }
        else{
            if(Juego::where('id', '=', $request->id_juego)->delete()){
                return redirect('/');
            }
        }
    }
}
