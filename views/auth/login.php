<main class="contenedor seccion contenido-centrado">
        <h1 data-cy="heading-login">Iniciar Sesión</h1>
        
    <?php foreach ($errores as $error): ?>
    <div data-cy="alerta-login" class="alerta error"><?php echo $error; ?></div>

    <?php endforeach; ?>

    <form data-cy="formulario-login" method="POST" class="formulario" novalidate >
    <fieldset>
                <legend>Email y Password</legend>

        
                <label for="email">Tu correo</label>
                <input type="email" name="email" placeholder="Tu nombre" id="email" required>


                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Tu Password" id="password" required>

            </fieldset>

            <input type="submit" value="Inicias Sesión" class="boton boton-verde">

    </form>

    </main>
