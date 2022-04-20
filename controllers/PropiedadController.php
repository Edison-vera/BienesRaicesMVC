<?php

namespace Controllers;
use MVC\Router;
use Model\Propiedad;


class propiedadController{

    public static function index(Router $router){

        $propiedades = Propiedad::all();
        $resultado = null;

        $router->render("propiedades/admin",[
             "propiedades" => $propiedades,
             "resultado" =>$resultado  
        ]);

    }
    public static function crear(){
        echo "Crear";

    }
    public static function actualizar(){
        echo "Actualizar";

    }
}