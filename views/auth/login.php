<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Inicio de sesi&oacute;n </p>

<form class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            placeholder="Email"
            name="email"
        />
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password" 
            placeholder="password" 
            id="password"
            name="password"
        />

    <input type="submit" class="boton" value="Iniciar Sesi&oacute;n">
           

    </div>
</form>

<div class="acciones">
    <a href="/crearcuenta">Registrarse</a>
    <a href="/olvide">Recuperar cuenta</a>

</div>
