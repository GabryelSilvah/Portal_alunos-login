<?php

//require de páginas e mvc
require_once("./app/controller/controller.php");
require_once("./app/model/model.php");
require_once("./app/model/perfilModel.php");
require_once("./app/controller/sair.php");
include_once("./app/config/conexao.php");


class Router
{

    public $classe = 'Site';
    public $metodo = 'login';
    public $parametros = [];


    public function __construct()
    {
        $router = $this->uri();
        if (file_exists('app/controller/' . ucfirst($router[0]) . '.php')) {

            $this->classe = $router[0];
            unset($router[0]);
        }
        
        $controller = "app/controller/" . ucfirst($this->classe);
        require_once("./app/controller/".$this->classe.".php");
        $controlador = new $this->classe;

        // and method_exists($controller, $router[1])
        if (isset($router[1]) ) {
            echo $router[1];
            $this->metodo = $router[1];
        unset($router[1]);
        }
       
        call_user_func_array([$controlador, $this->metodo],$this->parametros);
    }



    public function uri()
    {

        $url = explode("/", filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL));
        return $url;
    }
}
