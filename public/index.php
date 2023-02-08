<?php 

use Controllers\LoginController;

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

$router = new Router();

//Iniciar sesion 
$router->get('/',[LoginController::class, 'Login']);





// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();