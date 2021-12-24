<h1>PÁGINA DE SERVICIOS</h1>

	<!-- formulario registro -->
	
	<h2>Arrendar canchas</h2>
	
<?php 
	
	date_default_timezone_set('Chile/Continental');

 ?>



<form id="form1" method="post" action="datos.php">
 
    <input type="date" id="fechaform" name="fechaform" step="1" min="2018-01-01"value="<?php echo date("Y-m-d");?>"> <br>
    <input type="text" name="fono" required placeholder="Ingresa Fono"/>
    <br>
    <select name="TABLA" >
      <option value="16:00:00">16:00-17:00 </option>
      <option value="18:00:00">18:00-19:00 </option>
    </select>
    <br>	
    <label class="checkeable">
	  <input type="checkbox" name="cancha" value="cancha1"/>
	  <img src="css/img/cancha1.jpg" width="40%" height="40%" />
	</label>

	<label class="checkeable">
	  <input type="checkbox" name="cancha" value="cancha2"/>
	  <img src="css/img/cancha2.jpg" width="40%" height="40%" />
	</label>

	<label class="checkeable">
	  <input type="checkbox" name="cancha" value="cancha3"/>
	  <img src="css/img/cancha3.jpg" width="40%" height="40%" />
	</label>

	<label class="checkeable">
	  <input type="checkbox" name="cancha" value="cancha4"/>
	  <img src="css/img/cancha4.jpg" width="40%" height="40%" />
	</label>
	<br>
	<input type="submit" name="submit"id="submit" value="Confirmar Arriendo" style="width: 30%; height: 30%" />

</form>


	