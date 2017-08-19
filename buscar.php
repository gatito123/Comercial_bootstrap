	<?php
		$ci=$_POST["ci"];
		$error=0;
		include("conexion.php");
		$consulta=mysqli_query($conexion,"SELECT * from clientes where ci_cli='$ci'");
		$n_com=mysqli_query($conexion,"select max(n_compra) as num from compras");
		$n_c=mysqli_fetch_array($n_com);
		$n_compra=$n_c["num"]+1;
		
		$n=mysqli_num_rows($consulta);
		if($n==0)
		{
			$error=1;
			header("location:compra.php?e=$error");
		}
		else
		{
			$error=0;
			$fila=mysqli_fetch_array($consulta);
			$id=$fila["id_cli"];
			$nom=$fila["nom_cli"];
			$ci=$fila["ci_cli"];
			$tel=$fila["tel"];
			
			session_start();
			$_SESSION['id_cli'] = $id;
			$_SESSION['nom_cli'] = $nom;
			$_SESSION['ci_cli'] = $ci;
			$_SESSION['tel'] = $tel;
			$_SESSION['n_compra'] = $n_compra;
			
			header("location:comprar_detalle.php");
		};
		?>
