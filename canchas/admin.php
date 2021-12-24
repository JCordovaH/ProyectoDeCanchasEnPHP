<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index.php");
}
?>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>Canchas</title>

	    <link href="css/style.css" rel="stylesheet"/>

	</head>
	<body>
		<div class="container">
		<header >
			<h1>ADMINISTRADOR DEL SITIO</h1>
		</header>

		  <!-- Navbar
		    ================================================== -->
		<nav>

				<form action="#" class="navbar-search form-inline" style="margin-top:6px">
				
				</form>
				<ul>
					<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
					<li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
				</ul>
		</nav>

		<!-- ======================================================================================================================== -->


				
		<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
				<h2> Administración de usuarios registrados</h2>	
				<hr/>
				<h4>Tabla de Usuarios</h4>
		

					<?php

						require("connect_db.php");
						$sql=("SELECT * FROM login WHERE visible=0");
			
		//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
						$query=mysqli_query($mysqli,$sql);

						echo "<table border='1'; class='tablephp';>";
							echo "<tr class='tdstyle'>";
								echo "<td>Id</td>";
								echo "<td>Usaurio</td>";
								echo "<td>Password</td>";
								echo "<td>Correo</td>";
								echo "<td>Password del administrador</td>";
								echo "<td>Editar</td>";
								echo "<td>Borrar</td>";
							echo "</tr>";

					    
					?>
					  
					<?php 
						 while($arreglo=mysqli_fetch_array($query)){
						  	echo "<tr class='trstyle'>";
						    	echo "<td>$arreglo[0]</td>";
						    	echo "<td>$arreglo[1]</td>";
						    	echo "<td>$arreglo[2]</td>";
						    	echo "<td>$arreglo[3]</td>";
						    	echo "<td>$arreglo[4]</td>";

						    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='css/img/actualizar.png' width='50' height='50' /></td>";
								echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='css/img/borrar.png' width='100' height='50'/></a></td>";
								

								
							echo "</tr>";
						}

						echo "</table>";

							extract($_GET);
							if(@$idborrar==2){
				
								$sqlborrar="UPDATE login SET visible=1 WHERE id=$id";
								$resborrar=mysqli_query($mysqli,$sqlborrar);
								echo '<script>alert("REGISTRO ELIMINADO")</script> ';
								//header('Location: proyectos.php');
								echo "<script>location.href='admin.php'</script>";
							}

					?>
					
						  
					  			  
				<br/>
				


				<!--EMPIEZA DESLIZABLE-->
				
				 <!--TERMINA DESLIZABLE-->


		<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
		

		<!-- Footer
		      ================================================== -->
		<hr/>
		<footer>


		</footer>
		</div><!-- /container -->

	</body>

</html>