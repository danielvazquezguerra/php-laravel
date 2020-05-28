<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(){
        return view('home');
    }

    function mostrarPlatos(){
        $platos = DB::table('platos')->get();
        dd($platos);
    }

    function show(){
        $plato=Platos::find(1);
    }
  
}
