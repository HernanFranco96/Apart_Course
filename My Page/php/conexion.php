<style>
    .mensajeServer{
        color: #82E0AA;
        width: 250px;
        font-size: 15px;
        margin: auto 20px;
        padding: 5px;
        text-align: center;
        border-radius: 3px;
    }
</style>

<?php 
    $host = "localhost";
    $db = "baseBetta";
    $user = "root";
    $pass = "";

    try
    {
        $conection = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
        echo "<h1 class='mensajeServer'>Conectado a la base de datos</h1>";    
    }
    catch(PDOException $e)
    {
        echo "<h1 class='mensajeServer'>Error no puedo conectarme con la base de datos: ".$e->getMessage()."</h1";
    }
?>