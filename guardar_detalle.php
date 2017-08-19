<?php
$n_compra=$_POST["n_compra"];
$cod_prod=$_POST["cod_prod"];
include("conexion.php");
$consulta=mysqli_query($conexion,"select * from productos where cod_prod='$cod_prod'");
$fila=mysqli_fetch_array($consulta);
$punit=$fila["punit"];
$existe=$fila["existe"];
$cantc=$_POST["cantc"];
$imp_detc=$punit*$cantc;
$cant_res=$existe-$cantc;
//echo "$n_compra  $cod_prod  $cantc $imp_detc";
$error=0;
//echo "<br><a href='comprar_detalle.php?n=$n_compra'>Realizar otra compra</a>";
if($cant_res<0){ $error=1;}
else{
    $error=0;
    $consultac=mysqli_query($conexion,"insert into detallec values('$n_compra',null,'$cod_prod','$cantc','$imp_detc')");
    $consultae=mysqli_query($conexion,"UPDATE productos SET existe='$cant_res' WHERE cod_prod='$cod_prod'");
};
header("location: comprar_detalle.php?e=$error");
?>