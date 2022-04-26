<?php

namespace Controllers;
use MVC\Router;
use Model\Vendedor;

class VendedorController {
    public static function crear(Router $router){

          $errores = Vendedor::getErrores();
          $vendedor = new Vendedor;

          //Ejecutar el codigo despues que el usuario envia el formulario 
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
          //Crear una nueva instancia
          $vendedor = new Vendedor($_POST["vendedor"]);

          //Validar que no haya campos vacios
          $errores = $vendedor->validar();

          //No hay errores
          if(empty($errores)){
          $vendedor->guardar();
    }
}


          $router->render("vendedores/crear", [
              "errores"=> $errores,
              "vendedor"=> $vendedor

          ]);
    }
    public static function actualizar(Router $router){
        
        $errores = Vendedor::getErrores();
        $id= validarORedireccionar("/index.php/admin");
        
        //Obtener datos del vendedor para actualizar

        $vendedor = Vendedor::find($id);
        //Ejecutar el codigo despues que el usuario envia el formulario 
     if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
       //Asignar los valores 
       $args = $_POST['vendedor'];


       //Sicronizar objeto en memoria
       $vendedor->sincronizar($args);
   
       //Validacion
       $errores = $vendedor->validar();
    
   
     if(empty($errores)){
        $vendedor->guardar();
    }

}

          $router->render("vendedores/actualizar",[
              "errores"=>$errores,
              "vendedor"=>$vendedor

          ]);
    }
    public static function eliminar(){
        echo "Eliminar vendedor";
    }
}


