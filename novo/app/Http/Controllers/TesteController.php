<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function inicio(Request $request){
    return view('inicio');
    }
    public function loja(Request $request){
    return view('produtos');
    }
    public function pirulito(Request $request){
    return view('pirulito');
    }
    public function pirulito2(Request $request){
    return view('pirulito2');
    }
}