<?php

class portal{
    public function home()
    {
        require_once("./app/view/home.php");
    }

    public function status(){
        echo"olá status";
    }
}