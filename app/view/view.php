<?php

class View
{
    //cadastro
    public function viewCadastro($validacao)
    {
        require_once("./app/view/cadastro.php");
        if ($validacao == "existe") {
            return "Esse email já foi cadastrado";
        } else if ($validacao == "sucesso") {
            return "Usuário cadastrado com sucesso";
        } else if ($validacao == "diferentes") {
            require_once("./app/view/cadastro.php");
            $notificacao = new Notificacao;
            $notificacao = $notificacao->resposta("diferentes");
        } else if ($validacao == "inexistentes") {

            require_once("./app/view/cadastro.php");

            $notificacao = new Notificacao;
            $notificacao = $notificacao->resposta("inexistentes");
        }
    }
}
