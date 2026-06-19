<?php

    class Produto {
        public $nome;
        public $preco;
        public $quantidade;

        public function  __construct($n, $p, $q){
            $this->nome=$n;
            $this->preco=$p;
            $this->quantidade=$q;
        }

        public function exibirInformacoes(){
            echo "Nome: $this->nome, Preço: $this->preco , Quantidade: $this->quantidade";
        }

        public function calcularTotal(){
            $total=$this->preco*$this->quantidade;
            echo "$total";
        }
    }

    $obj= new Produto ("Banana", 1,150);
    $obj->exibirInformacoes();
    echo "<br>";
    $obj->calcularTotal();
?>