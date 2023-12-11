<?php

class Sair
{
      
    
    public function logout()
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        session_destroy();
        
    }
}
