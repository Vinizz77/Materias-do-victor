<?php

    require 'Pagamento.php';
    require 'Pix.php';
    require 'Cartao.php';

    $pix = new Pix();
    $Cartao = new Cartao();

    $Pix->pagar(50);
    $Cartao->pagar(150);
?>