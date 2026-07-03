<?php

class Aluno {
    private $nome;
    private $nota;

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $n): void {
        $this->nome = $n;
    }

    public function getNota(): float {
        return $this->nota;
    }

    public function setNota(float $nt): void {
        if ($nt >= 0 && $nt <= 10) {
            $this->nota = $nt;
        } else {
            echo "Valor inválido!";
        }
    }
}

$aluno1 = new Aluno();
$aluno1->setNome("Claudio");
$aluno1->setNota(7);
echo $aluno1->getNome();
echo "<br>";
echo $aluno1->getNota();
?>