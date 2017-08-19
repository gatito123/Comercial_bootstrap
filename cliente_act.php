<!DOCTYPE html>
<html>
<head>
	<title>Comercial</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<?php
$id=$_GET["id"];
include("conexion.php");
$conact=mysqli_query($conexion,"select * from clientes where id_cli='$id'");
$fila=mysqli_fetch_array($conact);
$nom=$fila["nom_cli"];
$ci=$fila["ci_cli"];
$tel=$fila["tel"];
echo "$nom $ci $tel";
?>

<div class="container">
	<div class="row">
	<div class="col-md-5">
	<h3>REGISTRO DE CLIENTE</h3>

	<form method=post action=cliente_act2.php>
	<input type=hidden name=id <?php echo "value='$id'>"; ?>
	<div class="form-group">
		<label for="idnom">Nombre:</label>
		<input class="form-control" type=text name=nom required placeholder="Nombre de cliente" 
		id="idnom" <?php echo "value='$nom'>"; ?> 
	</div>
	<div class="form-group">
		<label for="idci">C.I./NIT:</label>
		<input class="form-control" type=text name=ci required placeholder="CI/NIT" id="idci"
		 <?php echo "value='$ci'>"; ?>
	</div>
	<div class="form-group">
		<label for="idtel">Teléfono:</label>
		<input class="form-control" type=text name=tel required placeholder="Teléfono" id="idtel"
		 <?php echo "value='$tel'>"; ?>
	</div>
		<input type=submit value=Actualizar>
	</form>
	</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

