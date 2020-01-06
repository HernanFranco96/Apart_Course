<?php
    function conectar(){
        $user = "root";
        $pass = "";
        $server = "localhost";
        $bd = "registro";
        $conn = mysqli_connect($server,$user,$pass,$bd) or die ("Error al conectar a la base de datos");

        return $conn;
    }
?>