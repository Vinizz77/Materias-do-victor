<?php

    class Funcionario{
        private $nome;
        private $salario;

        public function setNome(string $n): void{
            $this->nome=$n;
        }

        public function getNome(): string{
            return $this->nome;
        }

        public function setSalario(float $s): void{
            if ($s>0){
                $this->salario=$s;
            }
            else {
                echo "Impossivel colocar valores menores que zero";
            }
        }

        public function getSalario(): float|null{
            return $this->salario;
        }
    }

    $obj= new Funcionario();
    $obj->setNome("Vinicius");
    $obj->setSalario(-67);

    echo $obj->getNome();
    echo "<br>";
    echo $obj->getSalario();kp=
                                                                                        


    
?>