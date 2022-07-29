<?php 

if(!isset($_SESSION)){
    session_start();
}

$auth = $_SESSION['login'] ?? null; 

if(!isset($inicio)){
    $inicio = false;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="../build/css/app.css">
</head>

<body>
    <header class="header <?php if($inicio === true){echo 'header-inicio';}else{echo '';} ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="../build/img/logo.svg" alt="Logotipo de bienes raices">
                </a>
                <div class="mobile-menu">
                    <img src="../build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="contenedor-navegacion">
                    <img class="dark-mode" src="../build/img/dark-mode.svg" alt="modo noche">
                    <nav class="navegacion" data-cy="navegacion-header">
                        <a href="/nosotros">Nosotros</a>
                        <a href="/anuncios">Anuncios</a>
                        <a href="/blog">Blog</a>
                        <a href="/contacto">Contacto</a>
                        <?php if($auth): ?>
                            <a href="/admin">Administrar</a>
                            <a href="/logout">Cerrar sesion</a>
                        <?php else: ?>
                            <a href="/login">Login</a>
                        <?php endif ?>
                    </nav>
                </div>
            </div>
            <?php if($inicio === true){echo '<h1 data-cy="heading-sitio">Venta de casas y departamentos exclusivos de lujo</h1>';}else{echo '';} ?>
        </div>
    </header>

    <?php echo $contenido ; ?>
    
    <footer class="footer seccion">
        <div class="contenedor contenido-footer">
            <nav class="navegacion" data-cy="navegacion-footer">
                <a href="/nosotros">Nosotros</a>
                <a href="/anuncios">Anuncios</a>
                <a href="/blog">Blog</a>
                <a href="/contacto">Contacto</a>
            </nav>
        </div>
        <p data-cy="copyright" class="copyright">Todos los derechos reservados <?php echo date('Y')?> &copy;</p>
    </footer>
    <script src="../build/js/bundle.min.js"></script>
</body>
</html>