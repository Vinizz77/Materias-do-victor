<?php

    class Animal{
        public $especie;
        public $nome;
        public $cor;

        public function __construct($e, $n, $c) {
            $this->especie=$e;
            $this->nome=$n;
            $this->cor=$c;
        }
        public function apresentarInformacoes() {
            echo "Especie: $this->especie, Nome: $this->nome, Cor: $this->cor";
        }
    }
    $animal1= new $animal1();
    //$animal1->nome="cachorro";
    //$animal1->especie="salsinha";
    //$animal1->cor="preto";
    //$animal1->apresentarInformacoes();

    var_dump($animal1);
?>