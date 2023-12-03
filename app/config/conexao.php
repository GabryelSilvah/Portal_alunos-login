<?php

class BancoDados
{

    public static function conexao()
    {
        // banco de dados o
        $servidor = "localhost";
        $nomeUsuario = "root";
        $senha = "";
        $nomeBanco = "portal_alunos";

        //banco de dados online
        // $servidor = "sql204.infinityfree.com";
        // $nomeUsuario = "if0_35236121";
        // $senha ="irX9QKMQJi2hC";
        // $nomeBanco = "if0_35236121_portaAlunos";

        $mysqli = mysqli_connect($servidor, $nomeUsuario, $senha, $nomeBanco);
        return $mysqli;
    }
}
