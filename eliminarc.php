<?php
session_destroy();
$n_compra=$_GET["n_compra"];
include("conexion.php");
$consultaf=mysqli_query($conexion,"select * from detallec where n_compra='$n_compra'");
$n=mysqli_num_rows($consultaf);
for($i=1;$i<=$n;$i++)
{
    $fila=mysqli_fetch_array($consultaf);
    $cantc=$fila["cantc"];
    $cod_prod=$fila["cod_prod"];

    $consultag=mysqli_query($conexion,"select * from productos where cod_prod='$cod_prod'");
    $filag=mysqli_fetch_array($consultag);
    $existe=$filag["existe"];
    
    $cant_res=$existe+$cantc;
    $consultae=mysqli_query($conexion,"UPDATE productos SET existe='$cant_res' WHERE cod_prod='$cod_prod'");
}

$consulta=mysqli_query($conexion,"delete from compras where n_compra='$n_compra'");
$consulta=mysqli_query($conexion,"delete from detallec where n_compra='$n_compra'");
header("location:compra.php");
?>
