<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CarrinhoController extends Controller
{
    public function index(Request $request){
        
        $carrinho = $request->session()->get('carrinho');
        return view('carrinho.carrinho', compact('carrinho'));
    }
    
    public function limpar(Request $request){
        $request->session()->put('carrinho', null);
        return redirect('carrinho');
    }
    
}
