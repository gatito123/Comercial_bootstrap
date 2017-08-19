<?php
$nom=$_POST["nom"];
$ci=$_POST["ci"];
$tel=$_POST["tel"];
echo "$nom $ci $tel";
include("conexion.php");
$consulta=mysqli_query($conexion,"insert into clientes values(null,'$nom','$ci','$tel')");
header("location:cliente_reg.php");
?>
