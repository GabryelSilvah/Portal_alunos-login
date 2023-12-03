<?php

class View
{

    public function login($validacao)
    {


        if (!isset($validacao)) {
            include_once("./app/view/login.php");
        } else {
            if ($validacao == "home") {
                include_once("./app/view/home.php");
            } else {
                include_once("./app/view/login.php");
            }
        }
    }

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

        }else if($validacao == "inexistentes"){
            $_GET['url'] = "cadastro";
            require_once("./app/view/cadastro.php");
            $_GET['url'] = "cadastro";
           $notificacao = new Notificacao;
           $notificacao = $notificacao->resposta("inexistentes");
        }
    }
}
