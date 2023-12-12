<?php

class BancoDados
{

    public static function conexao()
    {
        // banco de dados localhost
        $servidor = "localhost";
        $nomeUsuario = "root";
        $senha = "";
        $nomeBanco = "portal_alunos";

      
        $mysqli = mysqli_connect($servidor, $nomeUsuario, $senha, $nomeBanco);
        return $mysqli;
    }
}
