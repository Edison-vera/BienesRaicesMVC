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
                <a href="http://localhost/index.php/">
    
                    <img src="/build/img/logo.png" alt="logotipo"> 
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Logotipo de bienes raices">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="Dark Mode">
                    <nav data-cy="navegacion-header" class="navegacion">
                        <a href="nosotros">Nosotros</a>
                        <a href="propiedades">Propiedades</a>
                        <a href="blog">Blog</a>
                        <a href="contacto">Contacto</a>
                        <?php if($auth):  ?>
                            <a href="logout">Cerrar Sesión</a>
                        <?php endif; ?>
                    </nav>
                </div>
            </div>
            <!-- Cierre de la barra -->
<?php 
    if($inicio){
        echo "<h1 data-cy='heading-sitio'> Venta de casas y departamientos exclusivos de lujo </h1>";
            }
        ?>

        </div>
    </header>


    <?php echo $contenido; ?>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav data-cy="navegacion-footer" class="navegacion">
                        <a href="nosotros">Nosotros</a>
                        <a href="propiedades">Propiedades</a>
                        <a href="blog">Blog</a>
                        <a href="contacto">Contacto</a>
            </nav>
        </div>
        <p data-cy="copyright" class="copyright">Todos los derechos reservados <?php echo date("Y"); ?> &copy; </p>

    </footer>



        <!-- Agregar modernizer -->
        <script src="/build/js/bundle.min.js"></script>
</body>

</html> 