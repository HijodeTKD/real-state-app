<fieldset>
    <legend>Informacion general</legend>
    <label for="titulo">TITULO:</label>
    <input id="titulo"type="text"name="entrada[titulo]"placeholder="Titulo de la entrada de blog" value= "<?php echo s($entrada->titulo); ?>">
    <label for="imagen">Imagen del portada:</label>
    <input id="imagen" type="file" name="entrada[imagen]">
    <?php if(($entrada->imagen)):?>
        <img src="/imagenes/<?php echo $entrada->imagen ?>" class="imagen-tabla"> 
    <?php endif?>
    <label for="contenido">CONTENIDO:</label>
    <textarea id="contenido" name="entrada[contenido]" placeholder="¿Qué quieres compartir con los demas?"><?php echo s($entrada->contenido); ?></textarea>
    <label class="informacion-meta" for="usuarioID"> 
    <?php if(isset($usuario->nombre)): ?>
    Escrito por:<span><?php echo $usuario->nombre; ?> </span>
    <?php else: ?>
    Vas publicar como: <span><?php echo $usuario ?></span>
    <?php endif; ?>
    </label>
</fieldset>