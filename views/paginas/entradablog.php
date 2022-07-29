<main class="contenedor seccion centrar-contenido">
<h1><?php echo $entrada->titulo ?></h1>
    <div>
        <div class="imagen">
            <picture>
                <img src="imagenes/<?php echo $entrada->imagen ?>" alt="Imagen de entrada">
            </picture>
        </div>
        <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
        </p>
        <p>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
            aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
            esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
        </p>
        <p class="informacion-meta">Escrito el <span><?php echo $entrada->creado ?></span> por <span><?php echo $usuario->nombre ?></span></p>
    </div>
</main>
