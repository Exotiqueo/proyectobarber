<?php
if(isset($_POST['registrarse'])){
include 'conexion.php';
$id = rand(1,99);
$nombres = $_POST["nombres"];
$contraseña = $_POST["contraseña"];
$email = $_POST["email"];
$contacto = $_POST["contacto"];


$insertar ="INSERT INTO `usuario`(`Id_usuario`, `Nombre_usuario`, `Contraseña_usuario`, `Email_usuario`, `Contacto_u`) VALUES ('$id', '$nombres','$contraseña','$email','$contacto')";

$resultado = mysqli_query($conec, $insertar);
mysqli_close($conec);
}
?>