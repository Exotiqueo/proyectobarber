<?php
 include 'registro.php';
include 'conexion.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/registro.css">
    <style>

    </style>
</head>
<body>
    <div class="lado">
    <div class= "fonfull">

</div>
<div class="cont">
    <div class="form">
        <div class="button">
            <div id="elegir"></div>
            <button type="button" class="toggle" onclick="login()">Iniciar sesión</button>
            <button type="button" class="toggle" onclick="registrar()">Registrar</button>
        </div>
       
        <form action="validar.php" id="login" class="input" method="POST">
            <input type="email" class="input2" id="email2" name="email2" placeholder="E-mail" required>
            <input type="password" class="input2" id="contraseña2" name="contraseña2" placeholder="Contraseña" required>
            <input type="checkbox" class="checkbox"> <span>Recordar Contraseña</span>
            <button type="submit" class="submit">Acceder</button>
        </form>
        <form  id="registrar" class="input" method="POST">
            <input type="text" class="input2" id="nombres" name="nombres" placeholder="Nombre" required>
            <input type="password" class="input2" id="contraseña" name="contraseña" placeholder="Contraseña" required>
            <input type="email" class="input2" id="email" name="email" placeholder="E-mail" required>
            <input type="number" class="input2" id="contacto" name="contacto" placeholder="Contacto" required>
            <input type="checkbox" class="checkbox"> <span><a src="#">Acepto Terminos y Condiciones </a></span>
    
            <button type="submit" id="registrarse" name="registrarse" value="registrarse" class="submit">Registrarse</button>
        </form>
    </div>
</div>
</div>
<script src="js/registro.js"></script>
</body>
</html>