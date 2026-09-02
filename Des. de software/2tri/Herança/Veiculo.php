<?php

    class Veiculo{
        public $marca;
        public $modelo;
    }

    class Carro extends Veiculo{
        public $quantidadeDePortas;
        
        public function exibirInfo():void{
            echo "Marca:". $this->marca;
            echo "<br>";
            echo "Modelo:". $this->modelo;
            echo "<br>";
            echo "Quantidade de portas:". $this->quantidadeDePortas;
        }
    }

    $obj= new Carro();
    $obj->marca="Fiat";
    $obj->modelo="Uno";
    $obj->quantidadeDePortas=2;

    $obj->exibirInfo();

?>