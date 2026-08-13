<?php

    class Pessoa{
        private $nome;
        private $idade;

        public function setNome(string $n):void{
            $this->nome= $n;
        }
        public function getNome():string{
            return $this->nome;
        }
        public function setIdade(int $i):void{
            $this->idade= $i;
        }
        public function getIdade():int{
            return $this->idade;
        }
    }
    $obj= new Pessoa();
    $obj->setNome("Vinicius");
    $obj->setIdade(67);
    echo $obj->getNome();
    echo "<br>";
    echo $obj->getIdade();

?>