<?php

    class ContaBancaria {
    public $titular;
    public $saldo;

    public function __construct($titu, $sal){
        $this->titular = $titu;
        $this->saldo = $sal;
    }

    public function depositar($valor) {
        if($valor <1){
            echo "valor invalido";
        }
        else{
        $this->saldo = $this->saldo + $valor;
    }

    }
    public function sacar($valor) {
        if($valor> $this->saldo){
            echo "valor invalido";
        }
        else{
        $this->saldo = $this->saldo - $valor;
    }

    }
    public function mostrarSaldo(){
        echo "Saldo: R$ $this->saldo";
    }
    }

    $pessoa1 = new ContaBancaria("joão", 13);
    var_dump($pessoa1);
 //   $pessoa1->titular = "Maria";
    var_dump($pessoa1);
    $pessoa1->depositar(6767);
    var_dump($pessoa1);
    $pessoa1->sacar(67);
    var_dump($pessoa1);
    $pessoa1->mostrarSaldo();

?>