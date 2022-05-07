<main class="contenedor seccion">
        <h1>Contacto</h1>

        <?php 
             if($mensaje){
                 echo "<p class='alerta exito'>" . $mensaje . "</p>"; 
             }
             ?>

        <picture>
            <source srcset="/build/img/destacada3.webp" type="image/webp">
            <source srcset="/build/img/destacada3.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de contacto </h2>


        <form class="formulario" action="contacto" method="POST">
            <fieldset>
                <legend>Información personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="contacto[mensaje]" ></textarea>

            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vendo o compra</label>
                <select id="opciones" name="contacto[tipo]" >
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Vende">Vende</option>
                    <option value="Compra">Compra</option>
                </select>

                <label for="presupuesto">Precio o presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto" name="contacto[precio]">


            </fieldset>


            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    
                    <label for="contactar-telefono">Telefono</label>
                    <input   type="radio" value="telefono" id="contacto-telefono"  name="contacto[contacto]">

                    <label for="contactar-correo">Correo</label>
                    <input  type="radio" value="email" id="contacto-email" name="contacto[contacto]">

                   
                </div>
                <div id="contacto"></div>

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>

    </main>