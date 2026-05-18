<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function cadastro_produto(Request $request){
        return view('cadastro_produto');
    }
        
    
}
