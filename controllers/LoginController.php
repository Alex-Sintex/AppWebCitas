<?php

namespace Controllers;

use MVC\Router;

class LoginController {
    public static function Login(Router $router){
        $router->render('auth/login');
    }
    public static function Logout(){
        echo "Desde Logout";
    }
    public static function olvide(){
        echo "Olvide Password";
    }
    public static function recuperar(){
        echo "Recuperar Password";
    }
    public static function crearcuenta(){
        echo "Crear cuenta";
    }
}