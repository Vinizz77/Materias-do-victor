<?php

    class Pessoa {
        public $nome;
        public $idade;
         public $altura;

        public function __construct($nome, $idade, $metros) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $metros;
        }
        public function apresentarNome() {
            echo "Meu nome é $this->nome";
        }
        public function apresentarIdade() {
            echo ", minha idade é $this->idade";
        }

        public function apresentarAltura() {
            echo " e minha altura é $this->altura";
        }
    }

    $pessoa1 = new Pessoa("Vinicius", 17, 1.62);
   $pessoa1->apresentarNome();
   $pessoa1->apresentarIdade();
   $pessoa1->apresentarAltura();
    echo "<br>";
    $pessoa2 = new Pessoa("Claudio", 16, 1.71);
   
   $pessoa2->apresentarNome();
   $pessoa2->apresentarIdade();
   $pessoa2->apresentarAltura();


?>