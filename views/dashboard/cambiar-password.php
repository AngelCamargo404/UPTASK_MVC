<?php include_once __DIR__ . '/header-dashboard.php';?>

<div class="contenedor-sm">
    <?php include_once __DIR__ . '/../templates/alertas.php';?>

    <a href="/perfil" class="enlace">Volver a perfil</a>

    <form action="/cambiar-password" class="formulario" method="POST">

        <div class="campo">
            <label for="password_actual">Contraseña Actual</label>
            <input type="password" name="password_actual" placeholder="Tu Contraseña Actual">
        </div>

        <div class="campo">
            <label for="password_nuevo">Contraseña nueva</label>
            <input type="password" name="password_nuevo" placeholder="Tu Contraseña nueva">
        </div>


        <input type="submit" value="Guardar Cambios">

    </form>

</div>

<?php include_once __DIR__ . '/footer-dashboard.php';?>
