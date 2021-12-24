<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<title>Canchas Registro</title>
		<link rel="stylesheet" href="css/style.css"  type="text/css">	
		
	</head>
	<body class="bodysec">
			<center><div class="tit"><h2>Inicio de sesión</h2>
				<center><div class="Ingreso">

			<table border="0" align="center" valign="middle">
				<tr>
				<td rowspan=2>
				<form action="validar.php" method="post">

					<table border="0">

					<tr><td><label><b>Correo: </b></label></td>
					<td width=80> <input style="border-radius:15px;" type="text" name="mail"></td></tr>

					<tr><td><label><b>Contraseña: </b></label></td>
					<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
					<tr><td></td>
					<td width=80 align=center><input type="submit" value="Aceptar"></td>
					</tr></tr></table>
				</form>
		<br>
		<!-- formulario registro -->

		<form method="post" action="" >
		  <fieldset>
		    <legend><b>Registro</b></legend>
		    <div>
		      <label><b>Ingresa tu nombre</b></label>
		      <input type="text" name="realname" placeholder="Ingresa tu nombre" />
		    </div>

		    <div>
		      <label><b>Ingresa tu email</b></label>
		      <input type="text" name="nick" required placeholder="Ingresa mail"/>
		    </div>

		    <div>
		      <label><b>Ingresa tu Password</b></label>
		      <input type="password" name="pass" placeholder="Ingresa contraseña" />
		    </div>

		    <div>
		      <label><b>Repite tu contraseña</b></label>
		      <input type="password" name="rpass" required placeholder="repite contraseña" />
		    </div>
		      
		    </div>
		   
		    <input  type="submit" name="submit" value="Registrarse"/>

		  </fieldset>
		</form>
		</div>
		<?php
			if(isset($_POST['submit'])){
				require("registro.php");
			}
		?>
		<!--Fin formulario registro -->

			</td>
			</tr>
			</table>
			</div></center></div></center>

	</body>
</html>