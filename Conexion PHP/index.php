<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form action="" method="POST">
            <input type="text" name="nombre" id="nombre" placeholder="Nick" required="required" minlength="4" minlength="20"><br>
            <input type="text" name="contraseña" id="contraseña" placeholder="Password" required="required" minlength="4" minlength="20"><br>
            <input type="submit" value="Registrar" id="boton">
        </form>
    <?php
        // CONECTAMOS A LA BASE DE DATOS.
        include("php/conexion.php");

        $conexion = conectar();
        // -----------------------------

        // INSERTAMOS NUEVOS REGISTROS A NUESTRA BASE DE DATOS.
        if(isset($_POST['nombre']) && isset($_POST['contraseña'])){
            $Nick = $_POST['nombre'];
            $Password = $_POST['contraseña'];

            include("php/IngresarDatos.php");

            if(Ingresar($Nick,$Password,$conexion) == 1)
                echo "<span id='aceptado'>USUARIO REGISTRADO</span>";
            else if(Ingresar($Nick,$Password,$conexion) == 0)
                echo "Error !!!";
            else if(Ingresar($Nick,$Password,$conexion) == -2)
                echo "<span id='rechazado'>EL NOMBRE DE USUARIO YA EXISTE</span>";

        }
    ?>
    </main>
</body>
</html>