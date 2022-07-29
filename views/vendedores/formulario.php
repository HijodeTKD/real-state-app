<fieldset>
    <legend>Informacion general</legend>
    <label for="nombre">Nombre:</label>
    <input id="nombre"type="text"name="vendedor[nombre]"placeholder="Nombre del vendedor(a)" value= "<?php echo s($vendedor->nombre); ?>">
    <label for="apellido">Apellido:</label>
    <input id="apellido"type="text"name="vendedor[apellido]"placeholder="Apellido del vendedor(a)" value= "<?php echo s($vendedor->apellido); ?>">
</fieldset>
<fieldset>
    <legend>Contacto</legend>
    <label for="telefono">Telefono:</label>
    <input id="telefono"type="tel"name="vendedor[telefono]"placeholder="Telefono del vendedor(a)" value= "<?php echo s($vendedor->telefono); ?>">
    <label for="email">E-mail:</label>
    <input id="email"type="email"name="vendedor[email]"placeholder="E-mail del vendedor(a)" value= "<?php echo s($vendedor->email); ?>">
</fieldset>