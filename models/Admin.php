<?php

namespace Model;

class Admin extends ActiveRecord {
    //Base de datos
    protected static $tabla ="usuarios";
    protected static $columnasDB = ["id","email","password"];

    public $id;
    public $email;
    public $password;

    public function __construct($args =[]){
        $this->id = $args["id"] ?? null;
        $this->email = $args["email"] ?? null;
        $this->password = $args["password"] ?? null;
    }

    public function validar (){
        if(!$this->email){
            self::$errores[]= "El Email es obligatorio";
        }
        if(!$this->password){
            self::$errores[]= "El Password es obligatorio";
        }
        
        return self::$errores;

    }
}