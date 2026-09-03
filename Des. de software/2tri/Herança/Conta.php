<?php

    class Conta{
        public $titular;
        public $saldo;
        public function depositar(float $d):void{
            $this->saldo= $this->saldo+$d;
        }
        public function sacar(float $s):void{
            $this->saldo=$this->saldo-$s;
        }
    }

    class ContaPoupanca extends Conta{
        public $taxaRendimento;

        public function exibirInfo():void{
            echo "Nome:". $this->titular;
            echo "<br>";
            echo "Saldo:". $this->saldo;
            echo "<br>";
            echo "Taxa Rendimento:". $this->taxaRendimento;
        }
    }

    $obj= new ContaPoupanca();
    $obj->titular="Vinicius";
    $obj->saldo=6700;
    $obj->taxaRendimento="1,67%";
    $obj->depositar(9);
    $obj->sacar(67);

    $obj->exibirInfo();
?>