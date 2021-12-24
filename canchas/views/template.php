<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Canchas</title>

		<link href="css/style.css" rel="stylesheet"/>
		 <?php 

		 	session_start();
			if (@!$_SESSION['user']) {
				header("Location:index.php");
			}elseif ($_SESSION['rol']==1) {
				header("Location:index.php");
			}
		?>
		
	</head>
	<body>
		<header>
			<h1>LOGOTIPO</h1>
				
		</header>
		<?php
				include "views/modules/navegacion.php"; 
		?>

		<section>
			<?php 
				$mvc = new MvcController();
				$mvc -> enlacesPaginasController();
			 ?>
		</section>

	</body>
</html>