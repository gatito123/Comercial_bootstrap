<?php
$id=$_GET["id"];
include("conexion.php");
$coneli=mysqli_query($conexion,"delete from clientes where id_cli='$id'");
header("location:cliente_reg.php");
?>