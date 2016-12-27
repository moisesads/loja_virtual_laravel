<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Carrinho;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class ProdutoController extends Controller {

    //
    public function index() {
        $produtos = DB::table('produtos')->paginate(5);
        //acesso admin
        return view('produto.admin.todos', compact('produtos'));
    }

    public function todos() {        
        $produtos = DB::table('produtos')->paginate(8);       
        //acesso publico
        return view('produto.todos', compact('produtos'));
    }

    public function create() {
        return view('produto.admin.cadastro');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'nome' => 'required | max:30',
            'preco' => 'required | numeric ',
            'descricao' => 'required',
            'foto' => 'required',
            'preco_custo' => 'numeric',
        ]);
        
        $produto = new Produto();
        
        $produto->nome         = $request->nome;
        $produto->preco_custo  = $request->preco_custo;
        $produto->preco        = $request->preco;
        $produto->status       = $request->status;       
        $produto->descricao    = $request->descricao;       
        $produto->modo_usar    = $request->modo_usar;
        $produto->composicao   = $request->composicao;      
        $produto->categoria_id = null;       
        $produto->foto = '/img/produtos/' . $request->foto;       
        
        $produto->save();

        return redirect('/admin/produtos')->with('success', 'Produto adicionado com sucesso.');
    }

    public function show($id) {
        //busca produto pelo id
        $produto = Produto::findOrFail($id);
        //valor das parcelas 
        $parcela = $produto->preco / 6;
        $parcela = number_format($parcela, 2);
        //busca produtos relacionados
        $produtos_rl = DB::table('produtos')->paginate(4);
               
        return view('produto.produto', compact('produto', 'parcela', 'produtos_rl'));
    }

    public function edit($id) {
        return '';
    }

    public function update(Request $request, $id) {
        return '';
    }

    public function destroy($id) {
        return '';
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

}
