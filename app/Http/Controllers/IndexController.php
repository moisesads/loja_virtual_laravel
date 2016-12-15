<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {

    //        
    public function index() {
        //entrada do site
        $produtos = DB::table('produtos')->paginate(5);
        
        return view('welcome', compact('produtos'));         
    }

}
