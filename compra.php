<!DOCTYPE html>
<html>
<head>
	<title>Comercial</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include("nav.php"); ?>
<?php $compra=$_GET["c"]; 
if($compra==5){ session_start(); session_destroy(); };?>

<?php 
$ci=$_GET["ci"];
$e=$_GET["e"]; ?>
<div class="container">
<div class="row">
<div class="col-md-5">
	<label><h3>VENTA DE PRODUCTO</h3></label>
	<form method=post action=buscar.php>
		<div class="form-group">
		<label for="ci">C.I. Cliente:</label>
		<input class="form-control" type=text name=ci size=10 required <?php echo "value='$ci'>"; ?>
		<?php if($e==1){echo "<a href='cliente_regnuevo.php'><label for='ci'>Nuevo Cliente</label></a><br>"; } else {echo "<br>";}; ?>
		<input class="btn btn-primary" type=submit value=Buscar>
		</div>
	</form>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
</body>
</html>
