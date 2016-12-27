<?php

namespace App\Models;

class Carrinho
{
    public $itens = null;
    public $totalQtd = 0;
    public $totalPreco = 0;
    
    public function __construct($carrinho) {
        if($carrinho){
            $this->itens = $carrinho->itens;
            $this->totalQtd = $carrinho->totalQtd;
            $this->totalPreco = $carrinho->totalPreco;
        }
    }
    
    public function add($item, $id){
        $itemAdd = ['qtd' => 0, 'preco' => $item->preco, 'item' => $item];
        if($this->itens){
            if(array_key_exists($id, $this->itens)){
                $itemAdd = $this->itens[$id];
            }
        }
        
        $itemAdd['qtd']++;
        $itemAdd['preco'] = $item->preco * $itemAdd['qtd'];
        $this->itens[$id] = $itemAdd;
        $this->totalQtd++;
        $this->totalPreco += $item->preco;
    }
    
}
