<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ELIMINAR</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php include("conexion.php"); ?>
<body>
	<h2>DESOBES</h2>
	<?php

		$consulta = "SELECT * FROM betta WHERE 1";
                                                                  
		foreach($conection->query($consulta) as $value){
	?>
	<div class="caja">
		<a href="#" ><?php echo "Desobe #" . $value['id'];?></a>
	</div>
	<?php } ?>
</body>
</html>