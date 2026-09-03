<?php

    class Produto{
        public $nome;
        public $preco;
    }

    class ProdutoEletronico extends Produto{
        public $marca;
        public function exibirInfo():void{
            echo "Nome:". $this->nome;
            echo "<br>";
            echo "Preço:". $this->preco;
            echo "<br>";
            echo "Marca:". $this->marca;
        }
    }

    $obj= new ProdutoEletronico();
<<<<<<< HEAD
    $obj->nome ="Iphone 17";
    $obj->preco="18.000,00";
    $obj->marca="Apple";
=======
    $obj->nome("Iphone 17");
    $obj->preco("18.000,00");
    $obj->marca("Apple");
>>>>>>> 56c9989307df7cf8593ec8562358f7a5d040e95f

    $obj->exibirInfo();
?>