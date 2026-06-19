<?php

     class Produto {
        private $nome;
        private $preco;

        public function __construct($n, $p){
            $this->nome= $n;
            $this->preco= $p;
        }

        public function setNome($n){
            $this->nome= $n;
        }
        public function setPreco($p){
            $this->preco= $p;
        }
        public function apresenta(){
            echo $this->nome," ", $this->preco;
        }
     }
    $Pruduto1= new Produto("Teclado", 100);
    $Pruduto1->setNome("Mouse");
    $Pruduto1->setPreco(80);
    $Pruduto1->apresenta();