
<?php 	
		session_start();
		require("connect_db.php");

		$fecha = $_POST['fechaform'];
		
		$newDate = date("Y-m-d", strtotime($fecha));
		echo $newDate;

		$hora = $_POST['TABLA'];
		$_SESSION['user'] = $user;

	
		$dt = new DateTime($hora);
		$dt->add(new DateInterval('PT1H0M'));
		$dt->format('H:i:s');

	   
	   	echo '<br>';
		$canchas = $_POST['cancha'];
		

		echo '<br>';
		$fono = $_POST['fono'];
		
		

	 ?>

<?PHP
	$hoy = date("Y-m-d");
	// Si la fecha es de apartir de hoy => true 
	if ($hoy <= $fecha) {

	    
	}
	else {

	    echo '<script>alert("fecha incorrecta")</script> ';
	    echo "<script>location.href='index2.php?action=servicios'</script>";
		}			

?>


<?php 

	$checkcancha=mysqli_query($mysqli,"SELECT * FROM canchas WHERE (cancha='$canchas') AND (visible LIKE '0%')");
	$check_cancha=mysqli_num_rows($checkcancha);
			if($check_cancha>0)
			{
				echo ' <script language="javascript">alert("Cancha no esta disponible selecione otra cancha o horario");</script> ';
				echo "<script>location.href='index2.php?action=servicios'</script>";
			}
			else
			{
				
				//require("connect_db.php");
				//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO canchas VALUES('$user','$fono','$newDate','$hora','$dt', Ocupado,'$canchas', 5500, 0 )");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Ha Arrendo la cancha");</script> ';
				echo "<script>location.href='index2.php?action=servicios'</script>";
				
			}



 ?>