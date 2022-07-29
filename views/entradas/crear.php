<main class="contenedor seccion">
        <h1>CREAR NUEVA ENTRADA</h1>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach ?>
    <a class="boton-verde" href="/admin">Volver</a>
    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . "/formulario.php"; ?>
        <input class="boton-verde" type="submit" value="Crear entrada">
    </form>
</main>