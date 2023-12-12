<?php

class Router
{

    public $classe = 'site';
    public $metodo = 'login';
    public $parametros = [];


    public function __construct()
    {

        $router = $this->uri();

        if (file_exists('app/controller/' . $router[0] . '.php')) 
        {
            $this->classe = $router[0];
            unset($router[0]);
        }

        $controller = "./app/controller/" . ucfirst($this->classe);
        require_once("./app/controller/" . $this->classe . ".php");


        // and method_exists($controller, $router[1])
        if (!empty($router[1])) {
            $this->metodo = $router[1];
            unset($router[1]);
        }

        $classe = ucfirst($this->classe);
        $controlador = new $this->classe;

        //acessa o metódo da classe dinâmicamente
        call_user_func_array(array($controlador, $this->metodo), $this->parametros);
    }

    public function uri()
    {

        $url = explode("/", filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL));
        return $url;
    }
}
