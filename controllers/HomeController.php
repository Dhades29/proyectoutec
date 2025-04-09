<?php

class HomeController {

    public function index() {
        $titulo = "Inicio";

        include 'views/home/index.php';
        include 'views/layout/footer.php';
    }

    public function login(){
        $titulo = "Login";
        include 'views/layout/header.php';
        include 'views/home/login.php';
        include 'views/layout/footer.php';
    }

}

?>