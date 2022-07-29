<main class="contenedor seccion">
        <h1 data-cy="heading-administrador">PANEL DE ADMINISTRADOR</h1>
        
        <?php
        if(isset($registrado)): 
            
            $mensaje = mostrarMensaje(intval($registrado));
            if($mensaje):?>
                <p class="alerta exito" > <?php echo s($mensaje) ?></p>
            <?php endif; ?>
        <?php endif; ?>

        <a class="boton-verde" href="/propiedades/crear">Nueva propiedad</a>
        <a class="boton-amarillo-no-block" href="/vendedores/crear">Nuevo(a) vendedor</a>
        <a class="boton-gris-no-block" href="/entradas/crear">Nueva entrada de blog</a>
        <h2>PROPIEDADES</h2>
        <table class="propiedades">
            <thead class="cabecera-verde">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($propiedades as $propiedad):?>
                <tr >
                    <td> <?php echo $propiedad->id ?> </td>
                    <td> <?php echo $propiedad->titulo ?></td>
                    <td><img src="/imagenes/<?php echo $propiedad->imagen;?>" class="imagen-preview"></td>
                    <td> <?php echo $propiedad->precio ?> </td>
                    <td>
                        <a class="boton-verde-block" href="/propiedades/actualizar?id=<?php echo $propiedad->id?>">Actualizar</a>
                        <form method="POST" class="w-100" action="propiedades/eliminar">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id ?>">
                            <input type="hidden" name="tipo" value="propiedad">
                            <input type="submit" value="Eliminar" class="boton-rojo-block">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2>VENDEDORES</h2>
        <table class="propiedades">
            <thead class="cabecera-amarilla">
                <tr>
                    <th>ID</th>
                    <th>Nombre y Apellido</th>
                    <th>Telefono</th>
                    <th>E-mail</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($vendedores as $vendedor):?>
                <tr>
                    <td> <?php echo $vendedor->id ?> </td>
                    <td> <?php echo $vendedor->nombre . " " . $vendedor->apellido ?></td>
                    <td> <?php echo $vendedor->telefono ?> </td>
                    <td> <?php echo $vendedor->email ?> </td>
                    <td>
                        <a class="boton-verde-block" href="vendedores/actualizar?id=<?php echo $vendedor->id?>">Actualizar</a>
                        <form method="POST" class="w-100" action="vendedores/eliminar">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <input type="submit" value="Eliminar" class="boton-rojo-block">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2>ENTRADAS DEL BLOG</h2>
        <table class="propiedades">
            <thead class="cabecera-gris">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Creado por</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($entradas as $entrada):?>
                <tr >
                    <td> <?php echo $entrada->id ?> </td>
                    <td> <?php echo $entrada->titulo ?></td>
                    <td><img src="/imagenes/<?php echo $entrada->imagen;?>" class="imagen-preview"></td>
                    <td> <?php foreach($usuarios as $usuario){
                            if($entrada->usuarioID === $usuario->id){
                                echo $usuario->nombre;}} ?> </td>
                    <td>
                        <a class="boton-verde-block" href="entradas/actualizar?id=<?php echo $entrada->id?>">Actualizar</a>
                        <form method="POST" class="w-100" action="entradas/eliminar">
                            <input type="hidden" name="id" value="<?php echo $entrada->id ?>">
                            <input type="hidden" name="tipo" value="entrada">
                            <input type="submit" value="Eliminar" class="boton-rojo-block">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</main>