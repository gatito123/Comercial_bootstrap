<?php
function nombre($codigo)
{
	include("conexion.php");
	$con=mysqli_query($conexion,"select * from productos where cod_prod='$codigo'");
	$fil=mysqli_fetch_array($con);
	$nom=$fil["nom_prod"];
	return $nom;
}


?>
