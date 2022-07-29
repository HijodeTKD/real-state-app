<fieldset>
    <legend>Informacion general</legend>
    <label for="titulo">TITULO:</label>
    <input id="titulo"type="text"name="propiedad[titulo]"placeholder="Titulo propiedad" value= "<?php echo s($propiedad->titulo); ?>">
    <label for="precio">PRECIO:</label>
    <input id="precio" type="number" name="propiedad[precio]" placeholder="Precio propiedad" min="1" value="<?php echo s($propiedad->precio); ?>">
    <label for="imagen">FOTO:</label>
    <input id="imagen" type="file" name="propiedad[imagen]">
    <?php if(($propiedad->imagen)):?>
        <img src="/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-tabla"> 
    <?php endif?>
    <label for="descripcion">DESCRIPCION:</label>
    <textarea id="descripcion" name="propiedad[descripcion]" placeholder="Escribe una descripcion de la propiedad"><?php echo s($propiedad->descripcion); ?></textarea>
</fieldset>
<fieldset>
    <legend>Informacion propiedad</legend>
    <label for="habitaciones">HABITACIONES:</label>
    <input id="habitaciones" type="number" name="propiedad[habitaciones]" placeholder="Ej:3" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>">
    <label for="baños">BAÑOS:</label>
    <input id="baños" type="number" name="propiedad[baños]" placeholder="Ej:3" min="1" max="9" value="<?php echo s($propiedad->baños); ?>">
    <label for="aparcamientos">APARCAMIENTOS</label>
    <input id="aparcamientos" type="number" name="propiedad[aparcamientos]" placeholder="Ej:3" min="1" max="9" value="<?php echo s($propiedad->aparcamientos); ?>">
</fieldset>
<fieldset>
    <legend>Vendedor</legend>
    <label for="vendedor">Vendedor</label>
    <select name="propiedad[vendedorID]" id="vendedor">
        <option selected value="">Selecciona un vendedor</option>
        <?php foreach($vendedores as $vendedor): ?>
            <option <?php echo $propiedad->vendedorID === $vendedor->id ? 'selected' : '' ?> value=" <?php echo s($vendedor->id) ?>"> <?php echo s($vendedor->nombre) . " " . s($vendedor->apellido); ?> </option>
        <?php endforeach; ?>
    </select>
</fieldset>