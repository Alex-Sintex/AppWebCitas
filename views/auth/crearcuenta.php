<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente fromulario para crear una cuenta </p>

<?php debuguear($usuario); ?>

<form class="formulario" action="/crearcuenta" method="post
">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Nombre"
            value="<?php echo s($usuario ->nombre)?>"
            />
    </div>

    <div class="campo">
        <label for="apPaterno">Apellido Paterno</label>
        <input 
            type="text"
            id="apPaterno"
            name="apPaterno"
            placeholder="Apellido Paterno"
            />
    </div>

    
    <div class="campo">
        <label for="apMaterno">Apellido Materno</label>
        <input 
            type="text"
            id="apMaterno"
            name="apMaterno"
            placeholder="Apellido Materno"
            />
    </div>

    <div class="campo">
        <label for="telefono">Tel&eacute;fono</label>
        <input 
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="telefono"
            />
    </div>

    
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Correo electr&oacute;nico"
            />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="password"
            />
    </div>
    <input type="submit" value="Crear Cuenta" class="boton">
</form>


<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesi&oacute;n</a>
    <a href="/olvide">Recuperar cuenta</a>

</div>