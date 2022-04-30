
    <main class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

    <?php
    include 'iconos.php'; 
    ?>

    </main>

    <section class="seccion contenedor">
        <h2>Casas y departamentos en venta</h2>

        <?php 
        include "listado.php";
        ?>
        
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver todas</a>
        </div>

    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestros blog</h3>
            <article class="entrada-blog">

                <div class="imagen">
                    <picture>
                        <source srcset="/build/img/blog1.webp" type="image/webp">
                        <source srcset="/build/img/blog1.jpg" type="image/jpg">
                        <img src="/build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa </h4>
                        <p class="informacion-meta">Escrito el: <span>20/03/2022</span> por <span>Admin</span> </p>

                        <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero </p>

                    </a>

                </div>

            </article>
            <!-- Fin del article -->

            <article class="entrada-blog">

                <div class="imagen">
                    <picture>
                        <source srcset="/build/img/blog2.webp" type="image/webp">
                        <source srcset="/build/img/blog2.jpg" type="image/jpg">
                        <img src="/build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guia para la deroracion de tu hogar </h4>
                        <p class="informacion-meta">Escrito el: <span>05/03/2022</span> por <span>Admin</span> </p>

                        <p>Maximiza el espacio de tu hogar en esta guia, aprende a combinar muebles y colores para darle vida a tu espacio </p>

                    </a>

                </div>

            </article>
            <!-- Fin del article -->

        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una exelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.
                </blockquote>
                <p>- Juan de la torre</p>
            </div>

        </section>
    </div>


 
