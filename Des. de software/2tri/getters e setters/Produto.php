<?php

    class Produto {
        private $nome;
        private $preco;

        public function getNome(): string {
            return $this->nome;
        }
        public function setNome(string $n): void {
            $this->nome= $n;
        }
        public function getPreco(): float {
            return $this->preco;
        }
        public function setPreco(float $p): void {
            $this->preco= $p;
        }
    }
    $produto1= new Produto();
    $produto1->setNome("Bolinha de golfe");
    $produto1->setPreco(2.00);
    echo $produto1->getNome();
    echo "<br>";
    echo $produto1->getPreco();

?>