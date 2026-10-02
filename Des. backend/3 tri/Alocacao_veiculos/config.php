<?php
    
    $host= 'localhost';
    $dbName= 'alocacao_veiculos';
    $user= 'root';
    $password= '1234';

    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbName;charset=utf8mb4",
            $user,
            $password
        );
        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION,
        );
        $pdo->setAttribute(
            PDO::ATTR_DEFAULT_FETCH_MODE,
            PDO::FETCH_ASSOC,
        );
    } catch (PDOException $e){
        die ('Erro na conexão'. $e);
    }

?>