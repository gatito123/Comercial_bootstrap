<!DOCTYPE html>
<html>
<head>
	<title>Comercial</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include("nav.php"); ?>
	<div class="container">
	<div class="row">
	<div class="col-md-5">
		<h3>Detalle de compra</h3>
		<form method=post action='guardar_detalle.php'>
		<div class="form-group">
			<?php
			session_start();
			$n_compra=$_SESSION['n_compra'];

			$error=$_GET["e"];
			if($error==1){ echo "<br><label>Ups.. Lo sentimos no contamos con la cantidad que requiere.. </label><br><br><br>"; };
			echo "<label>Número de compra: $n_compra</label><hr>";
			include("conexion.php");
			$consulta=mysqli_query($conexion,"select * from productos");
			$n=mysqli_num_rows($consulta);
			echo "<input type=hidden name=n_compra value='$n_compra' id='idn_compra'>";
			echo "<select name=cod_prod class=form-control id='idcod_prod'>";
			for($i=1;$i<=$n;$i++)
			{
				$fila=mysqli_fetch_array($consulta);
				$cod_prod=$fila["cod_prod"];
				$nom_prod=$fila["nom_prod"];
				$marca=$fila["marca"];
				$punit=$fila["punit"];
				$existe=$fila["existe"];
				if($existe<=0) $disponible="agotado";
				else $disponible="disponible";
				echo "<option class=form-control value=$cod_prod>$cod_prod - $nom_prod ($marca) [$disponible:$existe] $punit Bs.</option><br>";
			};
			echo "</select></div><br>";
			echo "<div class='form-group'><label for=idcantc>Cantidad:</label><input class=form-control type=text name='cantc' size=5 id='idcantc' required></div><br>";
			?>
		<input type=submit class='btn btn-primary' value='Registrar detalle'>
		</div>
		</form>
		<hr>
	</div>
	</div>
	</div>

	<div class="container">
	<div class="row">
	<table class="table">
	<tr><th>Nro. compra</th><th>Nro. Detalle</th><th>Cod. Producto</th><th>Producto</th><th>Cantidad</th><th>Importe</th><th>Opcion</th></tr>
		<?php
		include("conexion.php");
		include("funciones.php");
		$consulta=mysqli_query($conexion,"select * from detallec where n_compra=$n_compra");
		$n=mysqli_num_rows($consulta);
		for($i=1;$i<=$n;$i++)
		{
			$fila=mysqli_fetch_array($consulta);
			$n_compra=$fila["n_compra"];
			$id_detc=$fila["id_detc"];
			$cod_prod=$fila["cod_prod"];
			$nom_prod=nombre($cod_prod);
			$cantc=$fila["cantc"];
			$imp_detc=$fila["imp_detc"];
			echo "<tr><td>$n_compra</td> <td>$id_detc</td> <td>$cod_prod</td> <td>$nom_prod</td> <td>$cantc</td> <td>$imp_detc</td>  <td><a href='eliminardet.php?n_compra=$n_compra&id_detc=$id_detc&cantc=$cantc&cod_prod=$cod_prod'><span class='glyphicon glyphicon-remove'></span><label>Eliminar</label></a><br></td></tr>";
		};
		echo "</table>";
		$consulta=mysqli_query($conexion,"select sum(imp_detc) as total from detallec where n_compra='$n_compra'");
		$fila=mysqli_fetch_array($consulta);
		$t=$fila["total"];
		echo "<label>Monto total:   ".$fila["total"]." Bs.</label>";
		echo "<br><br>";
		echo "<label><a href='eliminarc.php?n_compra=$n_compra'><span class='glyphicon glyphicon-trash'></span>Anular compra</a></label>";
		echo "<br><br>";
		echo "<label><a href='comprar_prod.php?t=$t'><span class='glyphicon glyphicon-ok-sign'></span>Comprar</a></label>";
		?>
	</div>
	</div>
<script src="js/jquery.min.js"></script>
</body>
</html>