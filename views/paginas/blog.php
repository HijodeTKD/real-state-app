<main data-cy="blog" class="contenedor seccion contenido-centrado">
<h3>Nuestro Blog</h3>
    <div class="blog">
        <?php foreach($entradas as $entrada): ?>
        <article class="entrada-blog">
            <div class="imagen">
            <a href="/entradablog?id=<?php echo $entrada->id;?>">
                <picture>
                    <img src="imagenes/<?php echo $entrada->imagen ?>"  alt="Imagen blog">
                </picture>
            </a>
            </div>
            <div class="contenido-blog">
                <a href="/entradablog?id=<?php echo $entrada->id;?>">
                    <h4> <?php echo $entrada->titulo ?> </h4>
                    <p class="informacion-meta">Escrito el <span><?php echo substr($entrada->creado, 0, 10) ?></span> por: <span> <?php  foreach($usuarios as $usuario){ if($entrada->usuarioID === $usuario->id){ echo $usuario->nombre;}} ?></span></p>
                    <p><?php echo substr($entrada->contenido, 0, 100) . '...'; ?></p>
                </a>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</main>