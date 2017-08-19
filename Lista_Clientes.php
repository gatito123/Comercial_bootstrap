<!DOCTYPE html>
<html>
<head>

	<title>Comercial</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<script>
	$(document).ready(function(){
		$("#mitabla").DataTable({
			"order":[[1,"asc"]]
		});
	})

	function Imprimir() {
    	window.print();
	}

	</script>

</head>
<body onload=Imprimir()>



<div class="container">
	<div class="row">
		<h3>LISTA DE CLIENTES</h3>
		<?php
		include("conexion.php");
		$consulta=mysqli_query($conexion,"select * from clientes");
		$n=mysqli_num_rows($consulta);
		echo "<table id='mitabla' class='display' cellspacing='0' width='100%'>";
		echo "<thead><tr><th>ID</th><th>Nombre</th><th>CI</th><th>Teléfono</th><th></thead>";
		echo "<tbody>";
		for($i=1;$i<=$n;$i++)
		{
			$fila=mysqli_fetch_array($consulta);
			$id=$fila["id_cli"];
			$nom=$fila["nom_cli"];
			$ci=$fila["ci_cli"];
			$tel=$fila["tel"];
			echo "<tr><td>$id</td><td>$nom</td><td>$ci</td><td>$tel</td>";
		};
		echo "</tbody></table>";
		?>
	</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>