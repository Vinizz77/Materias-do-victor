<?php
    #Criando cep
    $cep = "01001000";

    #Guardando a url
    $url = "http://viacep.com.br/ws/$cep/json/";

    #Fazendo a requisição
    $resposta = file_get_contents($url);

    #Mostar cep
    var_dump($resposta);

    $dados = json_decode($resposta, true);
    var_dump($dados);
    
    echo "Cidade: ". $dados['localidade'];
    echo "<br>";
    echo "Região: ". $dados['regiao'];

?>