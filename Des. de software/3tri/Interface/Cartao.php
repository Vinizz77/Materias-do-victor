<?php

    class Cartao implements Pagamento{
        public function pagar(float $valor): void{
            echo "Pagamento de R$ $valor via cartão";
        }
    }

?>