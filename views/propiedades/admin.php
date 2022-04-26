<main class="contenedor seccion">
        <h1>Administrador de bienes raices</h1>
    
        <?php 
        if($resultado){
            $mensaje = mostrarNotificacion(intval($resultado));
            if($mensaje){ ?>
                <p class="alerta exito"> <?php echo s($mensaje) ?> </p>
           <?php  } 
        }
        ?>
       
        
        <a href="propiedades/crear" class="boton boton-verde">Nueva Propiedad</a>
        <a href="vendedores/crear" class="boton boton-amarillo">Nuevo Vendedor</a>

        <h2>Propiedades</h2>
        <table class="propiedades">
              <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
              </thead>
            
              <tbody> <!-- Mostrar los resultados --->
              <?php foreach($propiedades as $propiedad):  ?>
                    <tr>
                        <td><?php echo $propiedad->id; ?></td>
                        <td><?php echo $propiedad->titulo; ?></td>
                        <td> <img src="../imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"></td>
                        <td>$ <?php echo $propiedad->precio; ?></td>
                        <td>
                           <form method="POST" class="w-100" action="../index.php/propiedades/eliminar">

                                <input type="hidden" name="id" value="<?php echo $propiedad->id;?>">
                                <input type="hidden" name="tipo" value="propiedad">


                                <input type="submit"  class="boton-rojo-block" value="Eliminar">
                           </form>
                            <a href="../index.php/propiedades/actualizar?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>    
                        </td>
                    </tr>
                    <?php endforeach; ?>
              </tbody>

        </table>

        <h2>Vendedores</h2>

<table class="propiedades">
      <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
      </thead>
    
      <tbody> <!-- Mostrar los resultados --->
      <?php foreach($vendedores as $vendedor):  ?>
            <tr>
                <td><?php echo $vendedor->id; ?></td>
                <td><?php echo $vendedor->nombre. " " . $vendedor->apellido; ?></td>
                <td><?php echo $vendedor->telefono; ?></td>
                <td>
                   <form method="POST" class="w-100" action="/index.php/vendedores/eliminar">

                        <input type="hidden" name="id" value="<?php echo $vendedor->id;?>">
                        <input type="hidden" name="tipo" value="vendedor">


                        <input type="submit"  class="boton-rojo-block" value="Eliminar">
                   </form>
                    <a href="../index.php/vendedores/actualizar?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>    
                </td>
            </tr>
            <?php endforeach; ?>
      </tbody>

      

</table>

</main>