
<?php
if (isset($_SESSION['email'])) {
    header(redirecionar.'portal/home');
    exit;
}



class Site
{

    public function login()
    {
        require_once("./app/view/login.php");
    }

    public function cadastro()
    {
        require_once("./app/view/cadastro.php");
    }

    public function redefinir_senha()
    {
        require_once("./app/view/redefinir_senha.php");
    }

}
