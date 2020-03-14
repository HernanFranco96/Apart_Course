<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrar Betta</title>
	<link rel="stylesheet" href="../css/style.css">
	<style type="text/css" media="screen">
		.formularioBetta{
			width: 600px; 
			height: 400px;
			margin: auto;
			color: white;
		}
		.titulo{
			width: 100%;
			display: block;
			margin: 3px 100px;
			font-size: 22px;
		}
		.caja{
			padding: 6px;
			width: 200px;
			margin: 0 100px;
			border-radius: 3px;
		}
		.botonImg{
			background-color: none;
			margin: 4px 100px;
		}
		.btnAceptar{
			width: 150px;
			background-color: none;
			border-radius: 4px;
			font-size: 22px;
			padding: 7px;
			margin: 10px 100px;
			cursor: pointer;
		}
		.btnVolver{
			width: 150px;
			background-color: none;
			border-radius: 4px;
			font-size: 22px;
			padding: 7px;
			cursor: pointer;
		}
		.resultado{
			width: auto;
			height: 50px;
			margin: 60px 100px;
			text-align: center;
			color: white;
			font-size: 22px;
			display: block;
		}
	</style>
</head>
<?php include('conexion.php'); include('clases.php'); ?>
<body>
	<div class="formularioBetta">
		<form action="#" method="post" accept-charset="utf-8">
			<div>
				<span class="titulo">Codigo:</span>
				<span><input class="caja" type="text" name="codigo"> (Obligatorio)</span>
			</div>
			<div>
				<span class="titulo">Clase:</span>
				<span><input class="caja" type="text" name="clase"> (Obligatorio)</span>
			</div>	
			<div>
				<span class="titulo">Alias:</span>
				<input class="caja" type="text" name="alias">
			</div>	
			<div>
				<span class="titulo">Año:</span>
				<input class="caja" type="text" name="edad"> 
			</div>	
			<div>
				<span class="titulo">Clasificacion:</span>
				<span><input class="caja" type="text" name="clasificacion"> (Obligatorio)</span>
			</div>		
			<div>
				<span class="titulo">Imagen:</span>
				<input class="botonImg" type="file" name="imagen">
			</div>		
			<div>
				<input class="btnAceptar" type="submit" name="enviar" value="REGISTRAR">
				<input class="btnVolver" type="button" name="enviar" value="VOLVER" onclick="location='/My_Page/php/index.php'">
			</div>

	<?php
		if(isset($_POST['enviar'])){
			if (!empty($_POST['codigo']) && !empty($_POST['clase']) && !empty($_POST['clasificacion'])) {

				$codigo = $_POST['codigo'];
				$clase = $_POST['clase'];
				$clasificacion = $_POST['clasificacion'];

				if(empty($_POST['alias'])){
					$alias = "-";
				}else{
					$alias = $_POST['alias'];
				}

				if(empty($_POST['edad'])){
					$edad = "-";
				}else{
					$edad = $_POST['edad'];
				}

				$insertar = "INSERT INTO betta (Codigo,Clase,Alias,Edad,Clasificacion,Imagen) VALUES ('$_POST[codigo]',
																									'$_POST[clase]',
																									'$_POST[alias]',
																									'$_POST[edad]',
																									'$_POST[clasificacion]',
																									'$_POST[imagen]')";
				$resultado = $conection->query($insertar);                                                                          
				if($resultado)
				{
					echo "<span class='resultado'>REGISTRADO</span>";
				}
				else
					echo "<span class='resultado'>HUBO UN ERROR AL REGISTRAR BETTA</span>";
			}	
		}

	?>
		</form>
	</div>
</body>
</html>