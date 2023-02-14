<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;


class LoginController {
    public static function Login(Router $router){
        $router->render('auth/login');
    }
    public static function Logout(){
        echo "Desde Logout";
    }
    public static function olvide_password(Router $router){
        $router->render('auth/olvide_password', [

        ]);
    }
    public static function recuperar(){
        echo "Recuperar Password";
    }
    public static function crearcuenta(Router $router){
        
        $usuario = new Usuario;
       // debuguear($usuario);  sirve para ver datos en la pg
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        }

        $router->render('auth/crearcuenta', [
           'usuario'=> $usuario
        ]);
    }
}