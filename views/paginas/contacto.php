<main class="contenedor seccion">
    <h1 data-cy="heading-contacto">Contacto</h1>
    
    <?php if (isset($exito)): ?>
        <p data-cy="alerta-envio-formulario" class="alerta exito"><?php echo $mensaje;?></p>
    <?php else: ?>
        <p class="alerta error"> <?php echo $mensaje; ?></p>
    <?php endif; ?>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img src="build/img/destacada3.jpg" alt="Imagen de contacto">
    </picture>
    <h2 data-cy="heading-formulario">Contacta con nosotros</h2>
    <form data-cy="formulario-contacto" class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Informacion Personal</legend>
            <label for="nombre">Nombre</label>
            <input data-cy="input-nombre" type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" required>
            <label for="mensaje">Mensaje</label>
            <textarea data-cy="input-mensaje" id="mensaje" placeholder="¡Preguntanos cualquier duda!" name="contacto[mensaje]" required></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <label for="opciones">Vende o compra</label>
            <select data-cy="input-opciones" id="opciones" name="contacto[tipo]" required>
                <option value="" disabled selected>--Selecciona una opcion--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>
            <label for="presupuesto">Precio o presupuesto</label>
            <input data-cy="input-precio" type="number" id="presupuesto" placeholder="Tu precio o presupuesto" name="contacto[precio]" required>
        </fieldset>
        <fieldset>
            <legend>Contacto</legend>
            <p>¿Como quieres que contactemos?</p>
            <div class="formulario-contacto">
                <label for="eleccion-telefono">Telefono</label>
                <input data-cy="forma-contacto" type="radio" value="telefono" id="eleccion-telefono" name="contacto[contacto]" required>
                <label for="eleccion-email">Email</label>
                <input data-cy="forma-contacto" type="radio" value="email" id="eleccion-email" name="contacto[contacto]" required>
            </div>
            <div id="contacto"></div>
        </fieldset>
        <input class="boton-verde" type="submit" value="Enviar">
    </form>
</main>