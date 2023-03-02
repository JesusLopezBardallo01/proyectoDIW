<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = "localhost";
    $bd = "magic";
    $user = "root";
    $pass = "";
    $conexion = mysqli_connect($nombre, $user, $pass, $bd);
    $fechainicio = $_POST["fechainicio"];
    $fechafin = $_POST["fechafin"];
    $precio = $_POST["precio"];

    // Consulta para verificar si las fechas ya están en uso
    $query = "SELECT * FROM mazos_alquilados WHERE ((fecha_inicio >= '$fechainicio' AND fecha_inicio <= '$fechafin') OR (fecha_fin >= '$fechainicio' AND fecha_fin <= '$fechafin') OR ('$fechainicio' >= fecha_inicio AND '$fechainicio' <= fecha_fin) OR ('$fechafin' >= fecha_inicio AND '$fechafin' <= fecha_fin))";
    $registro = mysqli_query($conexion, $query);
    if (mysqli_num_rows($registro) > 0) {
        // Si hay resultados, las fechas ya están en uso, se muestra la página de error
        header("Location: ../vista/erroralquiler.html");
        exit();
    } else {
        // Si no hay resultados, se realiza la inserción
        $query = "INSERT INTO mazos_alquilados(fecha_inicio,fecha_fin,precio) values ('$fechainicio','$fechafin','$precio')";
        $registro = mysqli_query($conexion, $query);
        echo ("El registro del pedido se ha realizado correctamente");
        header("Location:" . "../vista/index.html");
    }
    ?>
</body>

</html>