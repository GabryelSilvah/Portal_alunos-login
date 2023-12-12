<?php
if (!isset($_SESSION['email'])) {
    header(redirecionar.'site/login');
    exit;
}
class portal
{
    public function home()
    {
        require_once("./app/view/home.php");
    }

    public function status()
    {
        require_once("./app/view/status.php");
    }

    public function perfil()
    {
        require_once("./app/view/perfil.php");
    }

    public function logout()
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        session_destroy();

        header(redirecionar.'site/login');
    }
}
