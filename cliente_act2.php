<?php
$id=$_POST["id"];
$nom=$_POST["nom"];
$ci=$_POST["ci"];
$tel=$_POST["tel"];
include("conexion.php");
$conact=mysqli_query($conexion,"update clientes set nom_cli='$nom',ci_cli='$ci',tel='$tel' where id_cli='$id'");
header("location:cliente_reg.php");
?>

