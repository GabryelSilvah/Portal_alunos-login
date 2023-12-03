<?php
include_once("./app/controller/controller.php");
$url = isset($_GET['url']) ? $_GET['url'] : $url = "login";


if ($url == "login") {
    require_once("./app/view/login.php");
} else if($url == "cadastro"){
    require_once("./app/view/cadastro.php");
}
else if ($url == "cadastrar") {
    $controller = new Controller;
    $controller = $controller->controllerCadastro();
} else if ($url == "logar") {
    $controller = new Controller;
    $controller = $controller->receberLogin();
} else {
    require_once("./app/view/login.php");
}
