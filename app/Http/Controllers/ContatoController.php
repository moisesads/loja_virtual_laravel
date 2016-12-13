<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    //
    public function mensagem(Request $request){
        
        $this->validate($request,[
            'email'=> 'required | max: 255',
            'assunto' => 'required | max: 255',
            'mensagem' => 'required | max: 600',
        ]);
        $contato = new Contato;
        $contato->email = $request->email;
        $contato->assunto = $request->assunto;
        $contato->mensagem = $request->mensagem;
        
        $contato->save();
        
        return redirect('/contato')->with('success', 'Agradeçemos seu contato, retornaremos em breve.');;
        
    }
}
