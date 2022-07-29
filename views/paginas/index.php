<main class="contenedor seccion">
        <h2 data-cy="heading-iconos">¿Qué ofrecemos?</h2>
        <?php include "iconos.php"; ?>
</main>
<section class="seccion contenedor">
    <h2 data-cy="heading-anuncios">Casas y pisos en venta</h2>

    <?php include "listadoanuncios.php"; ?>

    <div class="alinear-derecha">
        <a class="boton-verde" href="/anuncios" data-cy="ver-anuncios">Ver anuncios</a>
    </div>
</section>
<section data-cy="imagen-contacto" class="contacto-banner">
    <h2>Encuentra la casa de tus sueños</h1>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo con la mayor brevedad posible.</p>
        <a class="boton-amarillo-no-block" href="/contacto">Contáctanos</a>
</section>
<div class="contenedor seccion contenedor-testimonios-blog">
        <?php include "blog.php"; ?>
    <section data-cy="testimonios" class="testimonios">
        <h3>Testimonios</h3>
        <div class="testimonio">
            <blockquote>
                El personal es muy amable y atento, no puedo estar mas contento con la casa que compré.
                Supera con creces lo que me esperaba.
            </blockquote>
            <p>Cliente: German Pérez</p>
        </div>
    </section>
</div>