<?php

require_once __DIR__ . "../../includes/app.php";

use MVC\Router;

$router = new Router();

$router->get("/nosotros", "funcion_nosotros");
$router->get("/nosassaotros", "funcion_nosotros");
$router->get("/", "funcion_nosotros");


$router->comprobarRutas();