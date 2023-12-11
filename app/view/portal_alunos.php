<?php



require_once("./public/templates/nav.php");

class Portal
{
    public function logar($validacao)
    {

        echo " portal ";
        if ($validacao == true) {
          
            $url = $_GET['url'] ?? "home";

            if ($url == "home") {
                require_once("./app/view/home.php");
            } else if ($url == "perfil") {
                require_once("./app/view/perfil.php");
            } else if ($url == "status") {
                require_once("./app/view/status.php");
            } else if ($url == "sair") {
                $sair = new  SairController;
                $sair = $sair->logout();
            }
        }
    }
}
