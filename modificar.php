<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administracion</title>
</head>
<body>

    <center>
     <div >
          <span><h1>Modificar Datos</h1></span>
            <br>
            <?php


$id=$_REQUEST['Id_usuario'];
$query="SELECT*FROM usuario WHERE Id_usuario='$id'";

$resultado= $conec->query($query);
$filas=$resultado->fetch_assoc();


?>
    
          <form action="proceso.php?id=<?php echo $filas['Id_usuario']; ?>" method="POST">
          <label>Nombres</label>
              <input type="text" id="Nombre_usuario"  name="Nombre_usuario" value="<?php echo $filas['Nombre_usuario']; ?>"><br>

              <label>Contraseña</label>
              <input type="password" id="Contraseña_usuario" name="Contraseña_usuario" value="<?php echo $filas['Contraseña_usuario']; ?>"><br>

              <label>Email</label>
              <input type="email" id="Email_usuario" name="Email_usuario" value="<?php echo $filas['Email_usuario']; ?>" ><br>

              <label>Contacto</label>
              <input type="number" id="Contacto_u" name="Contacto_u" value="<?php echo $filas['Contacto_u']; ?>" ><br>

              <br>
              <button type="submit">Guardar</button>
              
          </form>  
     </div>
     </center>
     
</body>
</html>