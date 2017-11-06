<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <h1>PENETRONIX</h1>
        <form class="formulario" method="POST" action="iniciado.php">
            <h2 class="form-titulo">Inciar sesión</h2>
            <div class="form-campos">
                <input type="email"  id="email" name="email" placeholder="Correo" class="form-input-largo" >
                <input type="password"  id="clave" name="clave" placeholder="Contraseña" class="form-input-largo" >

                <input type="submit" value="Iniciar sesión" class="form-button">
                <p class="estrellita">¿No tienes cuenta?<a href="Registro.php">Pincha aquí</a></p>
            </div>
        </form>

    </body>
</html>
