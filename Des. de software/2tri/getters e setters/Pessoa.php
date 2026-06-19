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

?>