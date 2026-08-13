<?php

    class Carro{
        private $marca;
        private $modelo;
        private $velocidade;

    public function setMarca(string $m): void{
        $this->marca= $m;
    }

    public function getMarca(): string{
        return $this->marca;
    }

    public function setModelo(string $mod): void{
        $this->modelo= $mod;
    }
    

    public function getModelo(): string{
        return $this->modelo;
    }

    public function setVelocidade(float $v): void{
        $this->velocidade= $v;
    }

    public function getVelocidade(): float{
        return $this->velocidade;
    }

    public function Velocidade(float $v): void{
        if ($v>=0)
            { $this->velocidade+$v;
              $this->velocidade = $this->velocidade + $v;
            echo "velocidade aumentada para:";
        }
        else {
            echo "Impossivel correr velocidades negativas";
        }
    }
    }

    $obj= new Carro();
    $obj->setMarca("Fiat");
    $obj->setModelo("Uno");
    $obj->setVelocidade(67);

    echo $obj->getMarca();
    echo "<br>";
    echo $obj->getModelo();
    echo "<br>";
    echo $obj->getVelocidade();
    echo "<br>";

    $obj->velocidade(20);

    echo $obj->getVelocidade();
?>