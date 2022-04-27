<?php
     
     if(!isset($_SESSION)){
        session_start();
     }
     

     $auth = $_SESSION["login"] ?? false;
    //  var_dump($auth);

    if(!isset($inicio)){
        $inicio = false;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raicies</title>
    <!-- Agregar hoja de estilos -->
    <link rel="stylesheet" href="/build/css/app.css">

</head>

<body>

    <header class="header <?php echo $inicio ?"inicio": ""; ?> ">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/BienesRaices/index.php">
    
                     <img src="/build/img/logo.png" alt="logotipo"> 
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Logotipo de bienes raices">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="Dark Mode">
                    <nav class="navegacion">
                        <a href="index.php/nosotros">Nosotros</a>
                        <a href="index.php/propiedades">Anuncios</a>
                        <a href="index.php/blog">Blog</a>
                        <a href="index.php/contacto">Contacto</a>
                        <?php if($auth):  ?>
                            <a href="index.php/cerrar-sesion">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <!-- Cierre de la barra -->

         <?php 
              if($inicio){
                  echo "<h1> Venta de casas y departamientos exclusivos de lujo </h1>";
              }
         ?>

        </div>
    </header>


    <?php echo $contenido; ?>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                        <a href="/nosotros.php">Nosotros</a>
                        <a href="index.php/propiedades">Anuncios</a>
                        <a href="index.php/blog">Blog</a>
                        <a href="index.php/contacto">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados <?php echo date("Y"); ?> &copy; </p>

    </footer>



        <!-- Agregar modernizer -->
        <script src="/build/js/bundle.min.js"></script>
</body>

</html> 