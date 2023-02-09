<?php 

use Controllers\LoginController;

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

$router = new Router();

//Iniciar sesion 
$router->get('/',[LoginController::class, 'Login']);
$router->post('/',[LoginController::class, 'Login']);

//Cerrar sesi
$router->get('/Logout',[LoginController::class, 'Logout']);

//Recuperar Password
$router->get('/olvide',[LoginController::class, 'olvide']);
$router->post('/olvide',[LoginController::class, 'olvide']);
//recuperar password
$router->get('/recuperar',[LoginController::class, 'recuperar']);
$router->post('/recuperar',[LoginController::class, 'recuperar']);

//crear cuentas
$router->get('/crear-cuenta',[LoginController::class, 'crear-cuenta']);
$router->post('/crear-cuenta',[LoginController::class, 'crear-cuenta']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();