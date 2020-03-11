<?php 
	function mostrarPage($page)
	{
        include($page.'.php');
    }

    function insertarProducto($conection,$macho,$hembra,$fechaDes,$fechaNac,$cantidad)
    {
        $sql = "INSERT INTO productos (macho,hembra,fechaDes,fechaNac,cantidad) VALUES (?,?,?,?,?)";
        $resultado = $conection->prepare($sql);
	}

	$resultado->bindParam(1,$macho,PDO::PARAM_STR,30);
    $resultado->bindParam(2,$hembra,PDO::PARAM_STR,100);
    $resultado->bindParam(3,$fechaDes,PDO::PARAM_STR,50);
    $resultado->bindParam(4,$fechaNac,PDO::PARAM_STR,50);
    $resultado->bindParam(5,$cantidad,PDO::PARAM_INT,1000);

    if($resultado->execute())
        return true;

    return false;
 ?>