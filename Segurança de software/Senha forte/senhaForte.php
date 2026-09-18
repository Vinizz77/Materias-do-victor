<?php

    function senhaForte(string $senha): bool{
        if(strlen($senha) < 8 ){
            return false;
        }
        else if (!preg_match('/[A-Z]/', $senha)){
            return false;
        }
        else if (!preg_match('/[a-z]/', $senha)){
            return false;
        }
        else if (!preg_match('/[0-9]/', $senha)){
            return false;
        }
        else if (!preg_match('/[^A-Za-z0-9]/', $senha)){
            return false;
        }
        return true;
    }

    echo senhaForte("Jpzin67!");

    while(true){
        $senha= readline("Digite uma senha: ");
        if (senhaForte($senha)){
            echo "Cadastrada com sucesso.";
            break;
        }
        else "Senha Fraca, igual voce betinha. \n";
    }
?>