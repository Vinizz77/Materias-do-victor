<?php

    class MinhaClasse {
        public $nome;
        public $idade;
        public function __construct($n, $i){
            $this->nome= $n;
            $this->idade= $i;
        }
        public function meuMetodo(){
            echo "Chame meu método";
        }
    }
    $nome="vini";
    $idade=17;
    $obj= new MinhaClasse("Vini", "17");
    var_dump($obj);
    echo "<br>";
    //$obj->meuMetodo();
?>