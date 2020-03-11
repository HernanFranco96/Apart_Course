<!DOCTYPE html>
<html>
<head>
	<title>REGISTRAR DESOBE</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="cajaAgregar">
	<h2>REGISTRAR NUEVO DESOBE</h2>
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
			<input type="text" name="fechaDes"> 
		</div>
		<div>
			<span>Fecha Nacimiento</span>
			<input type="text" name="fechaNac"> 
		</div>
		<div>
			<span>Cantidad Alevines:</span>
			<input type="text" name="cantidad"> 
		</div>
		<div class="menuBotones">
			<input class="botonAgregar" type="submit" value="Registrar" name="enviar">
			<input class="botonVolver" type="button" value="Volver" onclick="location='/My_Page/php/inicio.php'">		
		</div>
	</form>
</div>
	<?php
	include("conexion.php");	

	if(isset($_POST['enviar']))
	{
		$insert = "INSERT INTO betta (macho,hembra,desobe,nacimiento,cantidad) VALUES ('$_POST[macho]',
			                                                                              '$_POST[hembra]',
			                                                                              '$_POST[fechaDes]',
			                                                                              '$_POST[fechaNac]',
			                                                                              '$_POST[cantidad]')";

		$resultado = $conection->query($insert);                                                                          
		if($resultado)
		{
			echo "<h1>REGISTRADO</h1>";
		}
		else
			echo "<h1>ERROR</h1>";


	}

 ?>
</body>
</html>