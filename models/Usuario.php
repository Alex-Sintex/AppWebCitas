<?php

use Model\ActiveRecord;

class Usuario extends ActiveRecord{
    //base de datos
    protected static $tabla = 'usuarios';
    //atributos de la tabla usuario
    protected static $columnaDB = ['id','nombre','apPaterno', 'apMaterno','email','password','telefono','admin','confirmado','token']; 

    public $id;
    public $nombre;
    public $apPaterno;
    public $apMaterno;
    public $email;
    public $password;
    public $telefono;
    public $admin;
    public $confirmado;
    public $token;

    //se crea una instancia con los atributos de la class
    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args ['nombre'] ?? '';
        $this->apPaterno = $args ['apPaterno']?? '';
        $this->apMaterno = $args ['apMaterno']?? '';
        $this->email = $args ['email']?? '';
        $this->password = $args ['password']?? '';
        $this->telefono = $args ['telefono']?? '';
        $this->admin = $args ['admin']?? '';
        $this->confirmado = $args ['confirmado']?? '';
        $this->token = $args ['token']?? '';

    }
}

