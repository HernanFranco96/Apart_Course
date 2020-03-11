<!DOCTYPE html>
<html>
<head>
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<?php include("conexion.php"); ?>
<body>
	<div class="cajaPadre">
		<h2>DESOBES</h2>
		<?php

			$consulta = "SELECT * FROM betta WHERE 1";
                                                                      
			foreach($conection->query($consulta) as $value){
		?>
		<div class="caja">
			<a href="#" ><?php echo "Desobe #" . $value['id'];?></a>
		</div>
		<?php } ?>
		<div class="boton">
			<a href="agregar.php" class="input">AGREGAR</a>
		</div>
		<div class="boton">
			<a href="eliminar.php" class="input">ELIMINAR</a>
		</div>
	</div>
</body>
</html>

	