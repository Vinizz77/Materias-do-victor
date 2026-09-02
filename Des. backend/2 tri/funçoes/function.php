<?php
#ex1-
    function saudacao(): void{
        echo "Bem-vindo ao curso de php";
    }

    saudacao();

#ex2-
    function nome(string $n): void{
        echo "Olá ". $n;
    }
    

    echo "<br>";
    nome("Vini");

#ex3-
    function idade(int $i): void{
        echo "Voce tem ". $i . " anos";
    }
    

    echo "<br>";
    idade(67);

#ex4-
    function tabuada(): void{
        for ($t=0; $t<=10; $t++)
        { $resp= $t*5;
        echo "<br>";
        echo $resp;}
    }
    

    echo "<br>";
    tabuada();

#ex5-
    function verificarIdade(int $id): void{
        if ($id>=18){
            echo "Você é maior de idade";
        }
        else {
            echo "Você é menor de idade";
        }
    }
    
    echo "<br>";
    verificarIdade(36);

#ex6-
    function soma(int $a, int $b): void{
        $res= $a+$b;
        echo $res;
    }

    echo "<br>";
    soma(30, 37);

#ex7-
    function dobro(int $d): void{
        $dob= $d*2;
        echo $dob;
    }

    echo "<br>";
    dobro(5);

#ex8-
    function media(int $a, int $b, int $c): void{
        $som= $a+$b+$c;
        $div= $som/3;
        echo $som;
    }

    echo "<br>";
    media(30, 30, 7);

#ex9-
    function minusculo(string $t):void{
        $min= strtoupper($t);
        echo$min;
    }
    
    echo "<br>";
    minusculo("php");

#ex10-
    function ehpar(int $n):void{
        if($n/2===0){
            echo "Par";
        }
        else{
            echo "Impar";
        }
    }

    echo "<br>";
    ehpar(7);
  ?>