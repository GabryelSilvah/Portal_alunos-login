<?php
require_once("./app/controller/controller.php");
require_once("./app/model/sair.php");
$controller = new Controller;

define('logar', $controller->receberLogin());
$teste = new sairModel;
define('logout',$teste);