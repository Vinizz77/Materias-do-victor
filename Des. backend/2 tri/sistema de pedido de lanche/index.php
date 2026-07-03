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
        <input type="text" name="cliente" required>
        <br>
        <label for="">Lanche escohido</label>
        <br>
        <select name="lanche" id="">
            <option value="Hamburger">Hamburger</option>
            <option value="HotDog">Hot Dog</option>
            <option value="Pizza">Pizza</option>
            <option value="Pastel">Pastel</option>
        </select>
        <br>
        <label for="Quantidade">Quantidade</label>
        <br>
        <input type="number" name="quantidade" min="1" required>
        <br><br>
        <button type="submit">Fazer pedido</button>
    </form>
</body>
</html>
    <?php

    $preco= [
        "Hamburger"=>15,
        "HotDog"=>10,
        "Pizza"=>25,
        "Pastel"=>8
    ];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["cliente"])||
            empty($_POST["lanche"])||
            empty($_POST["quantidade"])
        ){
            echo "Preencha todos os campos";
        }
        else {
        $cliente = $_POST["cliente"];
        $lanche = $_POST["lanche"];
        $qtd = $_POST["quantidade"];

        function calcularTotal(float $preco, int $quantidade): float {
            return $preco * $quantidade;
        }

        function verificarFreteGratis (float $total): string {
            if ( $total>=50){
                return "Sim";
            }
            else {
                return "Não";
            }
        }

        $precoUnicario=$preco[$lanche];
        $total = calcularTotal($precoUnicario, $qtd);
        echo "<br>";
        echo "Cliente: $cliente". "<br>";
        echo "Lanche: $lanche". "<br>";
        echo "Preço do lanche: R$ $precoUnicario". "<br>";
        echo "Quantidade: $qtd". "<br>";
        echo "Total da conta: R$ $total". "<br>";
        echo "Frete Gratis: " . verificarFreteGratis($total). "<br>";
        }

        }

    
?>