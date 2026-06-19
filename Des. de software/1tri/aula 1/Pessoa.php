<?php

    class Pessoa {
        public $nome;
        public $idade;

        public function apresentarNome() {
            echo "Meu nome é $this->nome";
        }
        public function apresentarIdade() {
            echo " e minha idade é $this->idade";
        }
    }

    $pessoa1 = new Pessoa();
    $pessoa1->nome = "Claudinho";
    $pessoa1->idade = 17;
    $pessoa1->apresentarNome();
    $pessoa1->apresentarIdade();
    echo "<br>";
    $pessoa2 = new Pessoa();
    $pessoa2->nome ="Vinizin";
    $pessoa2->idade =18;
    $pessoa2->apresentarNome();
    $pessoa1->apresentarIdade();


?>