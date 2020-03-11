<!DOCTYPE html>
<html>
<head>
	<title>AGREGAR DESOBE</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
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
		<input class="botonAgregar" type="submit" value="Ingresar" name="enviar">
		<a href="inicio.php" class="botonVolver">Volver</a>
	</form>
</div>

