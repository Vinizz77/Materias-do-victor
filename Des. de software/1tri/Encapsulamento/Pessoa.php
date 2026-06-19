<?php

class Pessoa {
    private $nome;

    public function setNome(string $n): void {
        $this->nome = $n;
    }

    private function getNome(): string {
        return $this->nome;
    }

    public function mostrarInformacoes(): string {
        return $this->getNome();
    }
}

$pessoa = new Pessoa();

$pessoa->setNome("Vini");

echo $pessoa->mostrarInformacoes();