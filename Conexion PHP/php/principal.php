<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insertar Datos</title>
</head>
    <?php
        include("conexion.php");

        $conn = conectar();

        echo "Se realizo exitosamente la conexion.";
    ?>
<body>
    <form action="principal.php"  method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir Pendiente">
    </form>
    <div id="todolist">
        <?php
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                echo $texto;

                $sql = "INSERT INTO texto(textito, completado) VALUES ('$texto', false); ";

                if($conn->query($sql) === TRUE){
                    echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }else{
                    die("Error al insertar datos");
                }
            }
        ?>
    </div>
</body>
</html>
