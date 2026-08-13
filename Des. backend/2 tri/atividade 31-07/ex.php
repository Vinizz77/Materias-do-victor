<?php
//ex-1
    function saudacao(): void{
        echo "Bem-vindo ao curso de PHP!";
    }

    saudacao();
    echo "<br>";
//ex-2
    function mostrarNome(string $nome): void{
        echo "Olá, ". $nome;
    }

    mostrarNome("Vinicius");
    echo "<br>";
//ex-3
    function mostrarIdade(int $idade): void {
        echo "Você tem ". $idade ." anos";
    }
    mostrarIdade(67);
    echo "<br>";
//ex-4
    function tabuada(float $num): void {
        for ($i=1; $i<=10;$i++){
            echo "$num x $i= ". $num*$i;
            echo "<br>";
        }
    }
    tabuada(5);
    echo "<br>";
//ex-5
    function verificarMaiorIdade(int $idd): void{
        if ($idd<=18){
            echo "Maior de idade";
        }
        else {
            echo "Menor de idade";
        }
    }
    verificarMaiorIdade(16);
?>