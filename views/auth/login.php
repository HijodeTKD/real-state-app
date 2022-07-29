<main class="contenedor seccion contenido-centrado-small">
    <h1 data-cy="heading-login">INICIAR SESION</h1>
    <?php foreach($errores as $error): ?>
    <div data-cy="alerta-login" class="alerta error"><?php echo $error; ?></div>
    <?php endforeach; ?>

    <form data-cy="formulario-login" method="POST" action="/login">
    <fieldset class="formulario">
            <legend>Email y Password</legend>

            <label for="email">Email</label>
            <input data-cy="input-email" type="email" placeholder="Tu email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" placeholder="Tu password" id="password" name="password" required>

            <div class="centrar-elemento">
            <input data-cy="input-password" type="submit" value="Iniciar Sesión" class="boton-verde-block-no-margin ">
            </div>
        </fieldset>
    </form>
</main>