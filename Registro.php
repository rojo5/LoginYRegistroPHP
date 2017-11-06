<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Registro</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    <body>
        <?php
        
        
        ?>

        <h1>PENETRONIX</h1>
      

        <form action="php/registar.php" method="POST" class="formulario">
            <h2 class="form-titulo">CREA TU CUENTA</h2>
            <div class="form-campos">
                <input type="email"  id="email" name="email" placeholder="Correo" class="form-input-largo" >
                <input type="password"  id="clave" name="clave" placeholder="Contraseña" class="form-input" >
                <input type="password"  id="clave2" name="clave2" placeholder="Contraseña" class="form-input" >
                <input type="text"  id="nombre" name="nombre" placeholder="Nombre" class="form-input" >
                <input type="text"  id="apellido" name="apellido" placeholder="Apellidos" class="form-input" >
                <input type="date"  id="edad" name="edad"   class="form-input altura" >
                <select   id="sexo" name="sexo" class="form-input altura">
                    <option value="" disabled selected>Selecciona tu genero</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Andrógino">Andrógino</option>
                    <option value="Pangénero">Pangénero</option>
                    <option value="Transexual">Transexual</option>
                    <option value="Hermafrodita">Hermafrodita</option>
                </select>
                <input type="submit" value="Registrarse" class="form-button">
                <p class="estrellita">Si tienes cuenta  <a href="index.php">Pincha aquí</a></p>
            </div>
        </form>
        <footer>
            <p>Soy uno con la Fuerza, la Fuerza esta conmigo</p>
        </footer>


    </body>
</html>