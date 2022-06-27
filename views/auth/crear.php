<div class="contenedor crear">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu Cuenta en UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php'?>

        <form action="/crear" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" placeholder="Ingresa tu Nombre" name="nombre" value="<?php echo $usuario->nombre;?>">
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Ingresa tu E-mail" name="email" value="<?php echo $usuario->email;?>">
            </div>

            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Ingresa tu Contraseña" name="password">
            </div>

            <div class="campo">
                <label for="password2">Repetir Contraseña</label>
                <input type="password" id="password2" placeholder="Repite tu password" name="password2">
            </div>

            <input type="submit" class="boton" value="Crear Cuenta">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
            <a href="/olvide">¿Olvidaste tu Contraseña? Recuperar Contraseña</a>
        </div>
    </div> <!-- Contenedor-sm -->
</div>