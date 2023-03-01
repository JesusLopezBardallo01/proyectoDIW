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
    //$fechaAlta= date('Y-m-d');
    $fechainicio = $_POST["fechainicio"];
    $fechafin = $_POST["fechafin"];

    $query = "INSERT INTO mazos_alquilados(fecha_inicio,fecha_fin) values ('$fechainicio','$fechafin')";
    $registro = mysqli_query($conexion, $query);
    echo ("El registro del pedido se ha realizado correctamente");
    header("Location:" . "../vista/index.html");
    ?>
</body>

</html>