<!DOCTYPE html>
<html>
<head>
	<title>Comercial</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php include("nav.php");
  session_start();
	$ci_cli=$_SESSION['ci_cli'];
	$t=$_GET["t"];
   ?>
   
  <div class="container">
	<div class="row">
	<div class="col-md-5">
    <h3><label>VENTA DE PRODUCTO</label></h3><br>
    <form method=post action=validar.php>
    <label for="idci">C.I. de Cliente:</label>
    <input type=text name='ci_cli' value='<?php echo $ci_cli;?>' size=10 id="idci" required><br><br>

    <label for="idtel">Importe Total:</label>
    <input class="form-control" type=text value='<?php echo $t;?>' name='imp_tot' required placeholder="Importe Total Bs." id="idtel"><br>
    <span class='glyphicon glyphicon-thumbs-up'></span>
    <input class='btn btn-primary' type=submit value='Registrar compra'>
    </form>
  </div>
  </div>
  </div>
<script src="js/jquery.min.js"></script>
</body>
</html>
