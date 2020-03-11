<?php 
	include("header.php");

	if(isset($_POST['enviar']))
	{
		$macho = $_POST['macho'];
		$hembra = $_POST['hembra'];
		$fechaDes = $_POST['fechaDes'];
		$fechaNac = $_POST['fechaNac'];
		$cantidad = $_POST['cantidad'];

		if(insertarProducto($conection,$macho,$hembra,$fechaDes,$fechaNac,$cantidad))
			echo "<h4 style='color:white;'>DESOBE AGREGADO</h4>";
		else
			echo "<h4 style='color:white;'>ERROR</h4>";
	}
 ?>

<div class="cajaAgregar">
	<h2>AGREGAR NUEVO DESOBE</h2>
	<form action="#" method="post" accept-charset="utf-8">
		<div>
			<span>Macho:</span>
			<input type="text" name="macho"> 
		</div>
		<div>
			<span>Hembra:</span>
			<input type="text" name="hembra"> 
		</div>
		<div>
			<span>Fecha Desobe:</span>
			<input type="date" name="fechaDes"> 
		</div>
		<div>
			<span>Fecha Nacimiento</span>
			<input type="date" name="fechaNac"> 
		</div>
		<div>
			<span>Cantidad Alevines:</span>
			<input type="text" name="cantidad"> 
		</div>
			<input class="botonAgregar" type="submit" value="Ingresar" name="enviar">
	</form>
</div>


 <?php 
	include("footer.php");
 ?>