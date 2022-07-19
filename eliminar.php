<?php
include "conexion.php";
if (isset($_GET['Id_usuario'])){
    $id=$_GET['Id_usuario'];
    $delete=mysqli_query($conec, "DELETE FROM `usuario` WHERE `usuario` . `Id_usuario`='$id'");
}
?>
<script type="text/javascript">
    alert("datos eliminados");
    window.location.href='administrador.php';
</script>