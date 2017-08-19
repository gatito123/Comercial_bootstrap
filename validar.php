<?php
session_destroy();
$ci_cli=$_POST["ci_cli"];
$imp_tot=$_POST["imp_tot"];
$fechac=Date("Y-m-d");
include("conexion.php");
$consulta=mysqli_query($conexion,"select * from clientes where ci_cli='$ci_cli'");
$n=mysqli_num_rows($consulta);
if($n==0) { echo "Cliente NO registrado:<a href='cliente_reg.php'>Registrar</a>"; }
else {
	$fila=mysqli_fetch_array($consulta);
	$id_cli=$fila["id_cli"];
	$consulta=mysqli_query($conexion,"insert into compras values(null,'$id_cli','$imp_tot','$fechac')");
	$consulta=mysqli_query($conexion,"select max(n_compra) as n from compras");
	$fila=mysqli_fetch_array($consulta);
	$n=$fila["n"];
	header("location:compra.php?c=5");
	}
?>
