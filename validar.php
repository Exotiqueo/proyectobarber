<?php
include 'conexion.php';
$usuario2=$_POST['email2'];
$contraseña2=$_POST['contraseña2'];
session_start();
$_SESSION['email2']=$usuario2;

$jefe="SELECT*FROM administrador where usuario='$usuario2' and contraseña='$contraseña2'";
$inicio3=mysqli_query($conec, $jefe);

$admimi=mysqli_num_rows($inicio3);

if($admimi){
  header("location: administrador.html");
}
else{

$consulta="SELECT*FROM usuario where Contraseña_usuario='$contraseña2' and Email_usuario='$usuario2'";
$inicio2=mysqli_query($conec, $consulta);

$cuenta=mysqli_num_rows($inicio2);

if($cuenta){
    header("location:index.html");
}
else{
  echo "alert(cuenta incorrecta)";
  header("location:login.php");
  
}
mysqli_free_result($inicio2);
}
mysqli_close($conec);
?>