<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller {

    //
    public function index() {
        $produtos = Produto::get();
        //acesso admin
        return view('produto.admin.todos', compact('produtos'));
    }

    public function todos() {        
        $produtos = Produto::get();        
        //acesso publico
        return view('produto.todos', compact('produtos'));
    }

    public function create() {
        return view('produto.admin.cadastro');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'nome' => 'required',
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
        $produto = Produto::findOrFail($id);
        $parcela = $produto->preco / 6;
        $parcela = number_format($parcela, 2);
        return view('produto.produto', compact('produto', 'parcela'));
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

}
