<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;
use Session;

class CarrinhoController extends Controller
{
    private $carrinho;


    public function index(Request $request){
        
        $carrinho = $request->session()->get('carrinho');
        //dd($carrinho->all());
        return view('carrinho.carrinho', compact('carrinho'));
    }
    
    public function limpar(Request $request){
        $request->session()->put('carrinho', null);
        return redirect('carrinho');
    }
    
       public function AddParaCarro(Request $request, $id){
        
        $produto = Produto::find($id);
        $meuCarrinho = Session::has('carrinho') ? Session::get('carrinho') : null;
        $carrinho = new Carrinho($meuCarrinho);        
        $carrinho->add($produto, $produto->id);
        
        $request->session()->put('carrinho', $carrinho);
        //dd($request->session()->get('carrinho'));
        return redirect('produto/'. $produto->id)->with('success', 'O Produto foi adicionado ao carrinho.');
        
    }
    
    public function RemoverItemCarrinho(Request $request, $id){
        
        $carrinho = $this->PegarCarrinho();
        //dd($carrinho->itens[$id]['item']['nome']);
        
        $carrinho->removerItem($id);
        
        $request->session()->put('carrinho', $carrinho);
        
        return redirect('carrinho')->with('success', 'O Produto foi removido do carrinho.');
    }
    
    public function AddMaisUm(Request $request, $id){
        
        $carrinho = $this->PegarCarrinho();
        
        $carrinho->AdicionarUm($id);
        
        $request->session()->put('carrinho', $carrinho);
        
        return redirect('carrinho')->with('success', 'O Produto foi adicionado do carrinho.');
        
    }
    
    public function RemoverMenosUm(Request $request, $id){
        
        $carrinho = $this->PegarCarrinho();
        
        $carrinho->RemoverUm($id);
        
        $request->session()->put('carrinho', $carrinho);
        
        return redirect('carrinho')->with('success', 'O Produto foi removido do carrinho.');
        
    } 
        
    public function PegarCarrinho()
    {
        if (Session::has('carrinho')) {
            $carrinho = Session::get('carrinho');
        } else {
            $carrinho = $this->carrinho;
        }
        return $carrinho;
    }    
    
}
