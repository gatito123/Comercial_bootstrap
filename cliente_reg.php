<!DOCTYPE html>
<html>
<head>
	<?php include("nav.php"); ?>
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
	</script>

</head>
<body>

<div class="container">
	<div class="row">
	<div class="col-md-5">
	<h3>REGISTRO DE CLIENTE</h3>

	<form method=post action=cliente_reg2.php>
	<div class="form-group">
		<label for="idnom">Nombre:</label>
		<input class="form-control" type=text name=nom required placeholder="Nombre de cliente" id="idnom">
	</div>
	<div class="form-group">
		<label for="idci">C.I./NIT:</label>
		<input class="form-control" type=text name=ci required placeholder="CI/NIT" id="idci">
	</div>
	<div class="form-group">
		<label for="idtel">Teléfono:</label>
		<input class="form-control" type=text name=tel required placeholder="Teléfono" id="idtel">
	</div>
		<h3><span class='glyphicon glyphicon-floppy-saved'> </span> <input class='btn btn-primary' type=submit value=Registrar ></h3>
	</form>
	</div>
	</div>
</div>

<hr>
<div class="container">
	<div class="row">
		<h3>LISTA DE CLIENTES</h3>
		<?php
		include("conexion.php");
		$consulta=mysqli_query($conexion,"select * from clientes");
		$n=mysqli_num_rows($consulta);
		echo "<table id='mitabla' class='display' cellspacing='0' width='100%'>";
		echo "<thead><tr><th>ID</th><th>Nombre</th><th>CI</th><th>Teléfono</th><th>Eliminar</th><th>Actualizar</th></thead>";
		echo "<tbody>";
		for($i=1;$i<=$n;$i++)
		{
			$fila=mysqli_fetch_array($consulta);
			$id=$fila["id_cli"];
			$nom=$fila["nom_cli"];
			$ci=$fila["ci_cli"];
			$tel=$fila["tel"];
			echo "<tr><td>$id</td><td>$nom</td><td>$ci</td><td>$tel</td>
			<td><a href='cliente_eli.php?id=$id'><span class='glyphicon glyphicon-remove'></span>Eliminar</a></td>
			<td><a href='cliente_act.php?id=$id'><span class='glyphicon glyphicon-repeat'></span>Actualizar</a></td></tr>";
		};
		echo "</tbody></table>";
		?>
	</div>
</div>

</body>
</html>
