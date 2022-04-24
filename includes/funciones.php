<?php


define('TEMPLATES_URL' , __DIR__ .'/templates');
define('FUNCIONES_URL', __DIR__ .'funciones.php');
define('CARPETA_IMAGENES', $_SERVER["DOCUMENT_ROOT"] . '/imagenes/');



function incluirTemplate (string $nombre, bool $inicio = false){
    // echo TEMPLATES_URL . "/${nombre}.php";
    include TEMPLATES_URL . "/${nombre}.php";
}

function estaAutenticado () {
    
    session_start();
    
    if(!$_SESSION["login"]){
        header("location: ../BienesRaices");
    }
   
}

function debugear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

//Escapa el HTML
function s($html): string {
   $s = htmlspecialchars($html);
   return $s;
}

//Validar tipo de contenido
function validarTipoContenido($tipo){
    $tipos = ['vendedor','propiedad'];

    return in_array($tipo, $tipos);
}

//Muestra los mensajes 

function mostrarNotificacion($codigo){
    $mensaje = "";

    switch($codigo){
        case 1:
             $mensaje = "Creado Correctamente";
             break;
        case 2:
             $mensaje = "Actualizado Correctamente";
             break;
        case 3:
             $mensaje = "Eliminado Correctamente";
             break;
        default:
             $mensaje = false;
             break;
    }

    return $mensaje;
}

   
     