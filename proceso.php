<?php
include "conexion.php";

$id=$_REQUEST['Id_usuario'];
$nombres = $_POST["Nombre_usuario"];
$contraseña = $_POST["Contraseña_usuario"];
$email = $_POST["Email_usuario"];
$contacto = $_POST["Contacto_u"];


$query ="UPDATE usuario SET Nombre_usuario='$nombres', Contraseña_usuario='$contraseña', Email_usuario='$email', Contacto_u='$contacto' WHERE Id_usuario='$id'";
$resultado= $conec->query($query);

if($resultado){
    header("location: administrador.php");
}
else{
    echo "Insercion no exitosa";
}


?>