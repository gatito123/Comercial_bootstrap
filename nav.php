<!DOCTYPE html>
<html>
<head>
	<title>Comercial</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="nav.php"><span class='glyphicon glyphicon-home'> </span> INICIO</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
          <!--    <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>   -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Registrar <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="cliente_reg.php"><span class='glyphicon glyphicon-user'></span> Registro de Cliente</a></li>
                  <li><a href="#"><span class='glyphicon glyphicon-plus'></span> Registro de Peveedor</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><span class='glyphicon glyphicon-qrcode'></span> Registro de Producto</a></li>
                </ul>
              </li>

							<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-transfer'></span> Transacciones <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="venta.php"><span class='glyphicon glyphicon-shopping-cart'></span> Compra</a></li>
                  <li class="divider"></li>
                  <li><a href="compra.php"><span class='glyphicon glyphicon-usd'></span> Venta</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-print'></span>  Imprimir <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="Lista_clientes.php">Imprimir Lista de Clientes</a></li>
                  <li><a href="#">Imprimir Lista de Proveedores</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Imprimir Lista de Ventas</a></li>
                </ul>
              </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
