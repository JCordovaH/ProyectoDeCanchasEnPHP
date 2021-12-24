<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>		
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Canchas</title>

		<link href="css/style.css" rel="stylesheet"/>

	</head>
	<body class="bodyac">

		<header>
			<h1 class="h1actualizar">Actualizar Datos</h1>
		</header>

		  <!-- Navbar
		    ================================================== -->
		<nav>
				<ul>
					<li><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
					<li><a>Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
					<li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
				</ul>
		</nav>

		<!-- ======================================================================================================================== -->
	
		<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
				<h2> Administración de usuarios registrados</h2>	

				<hr/>
				<h4>Edición de usuarios</h4>
				
				<?php
				extract($_GET);
				require("connect_db.php");

				$sql="SELECT * FROM login WHERE id=$id";
			//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$ressql=mysqli_query($mysqli,$sql);
				while ($row=mysqli_fetch_row ($ressql)){
				    	$id=$row[0];
				    	$user=$row[1];
				    	$pass=$row[2];
				    	$email=$row[3];
				    	$pasadmin=$row[4];
				    }



				?>

				<form action="ejecutaactualizar.php" method="post">
						<label>Id</label><br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
						<label>Usuario</label><br> <input type="text" name="user" value="<?php echo $user?>"><br>
						<label>Password usuario</label><br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
						<label>Correo usuario</label><br> <input type="text" name="email" value="<?php echo $email?>"><br>
						<label>Password administrador</label><br> <input type="text" name="pasadmin" value="<?php echo $pasadmin?>"><br>
						
						<br>
						<input type="submit" value="Guardar" class="btn btn-success btn-primary">
				</form>
	  		
				<br/>
				


				<!--EMPIEZA DESLIZABLE-->
				
				 <!--TERMINA DESLIZABLE-->			

		<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
		<!-- Footer
		      ================================================== -->
		<footer>

		</footer>

	</body>
</html>


