<?php

    class Funcionario{
        public $nome;
        public $salario;
        public function apresentar():void{
            echo "Nome:". $this->nome;
            echo "<br>";
            echo "Salrio:". $this->salario;
        }
    }

    class Professor extends Funcionario{
        public $cargo;
        public function apresentar(): void{
            echo "Nome:". $this->nome;
            echo "<br>";
            echo "Salario:". $this->salario;
            echo "<br>";
            echo "Cargo:". $this->cargo;
        }
    }

    $obj= new Professor();
    $obj->nome="Vinicius";
    $obj->salario=6700.00;
    $obj->cargo="Farmador de aura";
    $obj->apresentar();
?>