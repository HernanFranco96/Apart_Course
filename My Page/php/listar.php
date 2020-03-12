<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LISTAR</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php include("conexion.php"); ?>
<body>

	<div class="cajaLista">
		<h2>DESOBES</h2>
		<?php

			$consulta = "SELECT * FROM betta WHERE 1";
	                                                                  
			foreach($conection->query($consulta) as $value){
		?>

		<div class="caja">
			<ul>
				<li><?php echo "ID #" . $value['id'];?></li>
				<li><?php echo "M | " . $value['macho'];?></li>
				<li><?php echo "H | " . $value['hembra'];?></li>
				<li><?php echo "F/D | " . $value['desobe'];?></li>
				<li><?php echo "F/N | " . $value['nacimiento'];?></li>
				<li><?php echo "C | " . $value['cantidad'];?></li>
				<li> <a href="#">+ info</a></li>
			</ul>
			<?php } ?>
			<input class="botonVolver" type="button" value="Volver" onclick="location='/My_Page/php/inicio.php'">
		</div>
		
	</div>
</body>
</html>