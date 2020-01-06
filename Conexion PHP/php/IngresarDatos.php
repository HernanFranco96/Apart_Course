<?php

    function Ingresar($user,$pass,$conexion){

        $busqueda = "SELECT * FROM usuario WHERE nombre = '$user'";
        
        $resultado = mysqli_query($conexion, $busqueda);

        if (mysqli_num_rows($resultado) == 0)
        {
            $sql = "INSERT INTO usuario(nombre, contra) VALUES ('$user' , '$pass'); ";

            if($conexion->query($sql) === TRUE){
                return 1;
            }else{
                die($conexion->error);
                return 0;
            }

        } else {
            return -2;
        }
    }
?>