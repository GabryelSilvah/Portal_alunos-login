<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Aluno</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
</head>

<?php
require_once("./app/config/conexao.php");
require_once("./app/config/conf.php");
require_once("./app/controller/login.php");
require_once("./app/model/model.php");
require_once("./app/model/perfilModel.php");


session_start();
require_once("./core/rotas.php");

$router = new Router;
