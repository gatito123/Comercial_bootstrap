<?php
$n_compra=$_GET["n_compra"];
$id_detc=$_GET["id_detc"];
$cantc=$_GET["cantc"];
$cod_prod=$_GET["cod_prod"];
include("conexion.php");
$consulta=mysqli_query($conexion,"delete from detallec where n_compra='$n_compra' and id_detc='$id_detc'");

$consultaf=mysqli_query($conexion,"select * from productos where cod_prod='$cod_prod'");
$fila=mysqli_fetch_array($consultaf);
$existe=$fila["existe"];
$cant_res=$existe+$cantc;

$consultae=mysqli_query($conexion,"UPDATE productos SET existe='$cant_res' WHERE cod_prod='$cod_prod'");

header("location:comprar_detalle.php?n=$n_compra");
?>
