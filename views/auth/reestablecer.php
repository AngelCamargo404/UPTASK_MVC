<div class="contenedor reestablecer">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php';?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu Nueva Contraseña</p>

        <?php include_once __DIR__ . '/../templates/alertas.php';?>

        <?php if($mostrar) {?>

        <form method="POST" class="formulario">
            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Ingresa tu Nueva Contraseña" name="password">
            </div>

            <div class="campo">
                <label for="password2">Repetir Contraseña</label>
                <input type="password" id="password2" placeholder="Repite tu Nueva Contraseña" name="password2">
            </div>

            <input type="submit" class="boton" value="Guardar Contraseña">
        </form>

        <?php } ?>

        <div class="acciones">
            <a href="/crear">¿Aún no tienes cuenta? Crear Cuenta</a>
            <a href="/olvide">¿Ya tienes Cuenta? Iniciar Sesión</a>
        </div>
    </div> <!-- Contenedor-sm -->
</div>