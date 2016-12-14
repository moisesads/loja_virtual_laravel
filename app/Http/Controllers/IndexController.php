<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller {

    //        
    public function index() {
        //entrada do site
        $produtos = Produto::get();
        
        return view('welcome', compact('produtos'));         
    }

}
