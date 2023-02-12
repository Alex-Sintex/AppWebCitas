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
    public static function olvide(Router $router){
        $router->render('auth/olvide-password', [
            
        ]);
    }
    public static function recuperar(){
        echo "Recuperar Password";
    }
    public static function crearcuenta(Router $router){
        $router->render('auth/crearcuenta', [
            
        ]);
    }
}