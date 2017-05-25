<?php

namespace App\Models;

use Session;

class Carrinho {

    public $itens = null;
    public $totalQtd = 0;
    public $totalPreco = 0;

    public function __construct($carrinho) {
        if ($carrinho) {
            $this->itens = $carrinho->itens;
            $this->totalQtd = $carrinho->totalQtd;
            $this->totalPreco = $carrinho->totalPreco;
        }
    }

    public function add($item, $id) {
        $itemAdd = ['qtd' => 0, 'preco' => $item->preco, 'item' => $item];
        if ($this->itens) {
            if (array_key_exists($id, $this->itens)) {
                $itemAdd = $this->itens[$id];
            }
        }

        $itemAdd['qtd'] ++;
        $itemAdd['preco'] = $item->preco * $itemAdd['qtd'];
        $this->itens[$id] = $itemAdd;
        $this->totalQtd++;
        $this->totalPreco += $item->preco;
    }

    public function all() {
        return $this->itens;
    }

    //pronto
    public function removerItem($id) {
        //dd($this->itens[$id]['preco']);
        $this->totalPreco -= $this->itens[$id]['preco'];
        $this->totalQtd -= $this->itens[$id]['qtd'];
        unset($this->itens[$id]);
    }

    public function RemoverUm($id) {

        if ($this->itens[$id]['qtd'] > 1) {

            $this->totalPreco -= $this->itens[$id]['item']['preco'];
            $this->totalQtd--;
            $this->itens[$id]['preco'] -= $this->itens[$id]['item']['preco'];
            Session::get('carrinho', $this->itens[$id]['qtd'] -= 1);
        }
    }

    public function AdicionarUm($id) {
        $this->totalPreco += $this->itens[$id]['item']['preco'];
        $this->totalQtd++;

        $this->itens[$id]['preco'] += $this->itens[$id]['item']['preco'];
        $this->itens[$id]['qtd'] ++;
    }

    public function clear() {
        $this->itens = [];
    }

}
