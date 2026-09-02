<?php

    class Pessoa{
        public $nome;
        public $idade;
    }

    class Aluno extends Pessoa{
        public $curso;

        public function apresentar(): void{
            echo "Nome:".$this->nome;
            echo "<br>";
            echo "Idade:".$this->idade;
            echo "<br>";
            echo "Curso:".$this->curso;
        }
    }

    $obj= new Aluno();
    $obj->nome="Vinicius";
    $obj->idade=17;
    $obj->curso="Informatica";
    $obj->apresentar();
?>