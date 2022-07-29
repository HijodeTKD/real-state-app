<main class="contenedor seccion centrar-contenido">
<h1 data-cy="titulo-propiedad"><?php echo $propiedad->titulo ?></h1>
<div class="contenido-anuncio anuncio">
    <div class="imagen">
        <picture>
            <img src="imagenes/<?php echo $propiedad->imagen?>" alt="Imagen casa frente al bosque">
        </picture>
    </div>
    <p class="precio"> <?php echo $propiedad->precio ?> €</p>
    <ul class="iconos-caracteristicas">
        <li>
            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
            <p><?php echo $propiedad->baños ?></p>
        </li>
        <li>
            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
            <p><?php echo $propiedad->aparcamientos; ?></p>
        </li>
        <li>
            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
            <p><?php echo $propiedad->habitaciones; ?></p>
        </li>
    </ul>
    <p class="padding-general">
    <?php echo $propiedad->descripcion; ?>
    </p>
    <p class="padding-general">
    <?php echo $propiedad->descripcion; ?>
    </p>
    <a href="formulario.php" class="boton-contacta"> ¡Contacta con nosotros!</a>
</div>
</main>