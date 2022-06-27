<div class="contenedor login">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <?php include_once __DIR__ . '/../templates/alertas.php';?>

        <form action="/" method="POST" class="formulario">
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Ingresa tu E-mail" name="email">
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Ingresa tu Contraseña" name="password">
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aún no tienes cuenta? Crear Cuenta</a>
            <a href="/olvide">¿Olvidaste tu Contraseña? Recuperar Contraseña</a>
        </div>
    </div> <!-- Contenedor-sm -->
</div>