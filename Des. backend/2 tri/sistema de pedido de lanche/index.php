<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de pedido de lanche</title>
</head>
<body>
    <h1>Sistema de pedido de lanche</h1>
    <form method="POST">
        <label for="">Nome do cliente</label>
        <br>
        <input type="text" name="cliente">
        <br>
        <label for="">Lanche escohido</label>
        <br>
        <select name="lanche" id="">
            <option value="Hamburger">Hamburger</option>
            <option value="Hot Dog">Hot Dog</option>
            <option value="Pizza">Pizza</option>
            <option value="Pastel">Pastel</option>
        </select>
        <br>
        <label for="Quantidade"></label>
        <br>
        <input type="number" name="quantidade" min="1">
        <br><br>
        <button type="submit">Fazer pedido</button>
    </form>
</body>
</html>
    <?php

    $preco= [
        "Hamburger"=>15,
        "Hot dog"=>10,
        "Pizza"=>25,
        "Pastel"=>8
    ];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $cliente = $_POST["cliente"];
        $lanche = $_POST["lanche"];
        $qtd = $_POST["quantidade"];
    }

    function calcularTotal(float $preco, int $quantidade): float {
        return $preco * $quantidade;
    }



?>