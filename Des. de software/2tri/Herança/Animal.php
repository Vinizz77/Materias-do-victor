<?php

    class Animal{
        
    public $nome;
    public function emitirSom(string $som):void{
        echo "O animal faz ". $som;
    }
    }

    class Cachorro extends Animal{
    }

    $obj = new Cachorro();
    $obj->emitirSom("Au Au");
?>