<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LISTAR</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php include("conexion.php");?>
<body>
	<div class="cajaLista">
		<h1>DESOBES</h1>
		<form action="#" method="post" accept-charset="utf-8">
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
				<input type="text" name="numero" class="cajaNumero"><br>
				<input class="botonVolver" type="submit" value="Eliminar" name="borrar">
				<input class="botonVolver" type="button" value="Volver" onclick="location='/My_Page/php/index.php'">
			</div>
		</form>
	</div>

	<style>
	    h2{
	        color: white;
	        width: 250px;
	        font-size: 15px;
	        margin: 30px auto;
	        padding: 5px;
	        text-align: center;
	        border-radius: 3px;
	        background-color: #C20C75
	    }
	</style>

	<?php

		if(isset($_POST['borrar']))
		{
			$id = $_POST['numero'];

			$sql = "DELETE FROM betta WHERE id=$id";

			$resultado = $conection->query($sql);                                                                          
			if($resultado)
				echo "<h2>DESOBE ELIMINADO</h2>";
			else
				echo "<h2>ESE DESOBE NO EXISTE</h2>";
			
		}
	?>
</body>
</html>