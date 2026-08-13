<?php

class ContaBancaria {
    private $titular;
    private $saldo;

    public function setTitular(string $t): void {
        $this->titular = $t;
    }

    public function getTitular(): string {
        return $this->titular;
    }

    public function setSaldo(float $s): void {
        $this->saldo = $s;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $d): void {
        if ($d > 0) {
            $this->saldo += $d;
            echo "Depósito realizado com sucesso<br>";
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    public function sacar(float $sc): void {
        if ($sc > 0 && $sc <= $this->saldo) {
            $this->saldo -= $sc;
            echo "Saque realizado com sucesso<br>";
        } else {
            echo "Impossível sacar.<br>";
        }
    }
}

$obj = new ContaBancaria();

$obj->setTitular("Vinicius");
$obj->setSaldo(67.00);

echo "Titular: " . $obj->getTitular() . "<br>";
echo "Saldo: R$ " . $obj->getSaldo() . "<br><br>";

$obj->depositar(20);

echo $obj->getSaldo() . "<br>";

$obj->sacar(30);

echo $obj->getSaldo() . "<br>";

?>