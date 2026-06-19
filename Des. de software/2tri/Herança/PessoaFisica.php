<?php

    require_once 'Pessoa.php';
    class PessoaFisica extends Pessoa {
        public $cpf;
    }

    $obj= new PessoaFisica();
    $obj->nome= "Vinicius";
    echo $obj->nome;

?>