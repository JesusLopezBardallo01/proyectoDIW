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
    $nombre="localhost";
    $bd="magic";
    $user="root";
    $pass="";
    $conexion=mysqli_connect($nombre,$user,$pass,$bd);
    //$fechaAlta= date('Y-m-d');
    $email= $_POST["user"];
    $contraseñaencriptada=password_hash( $_REQUEST["password"],PASSWORD_DEFAULT);
    $consulta= mysqli_query($conexion,"Select * from usuarios where email='".$email."'");
    $nr=mysqli_num_rows($consulta);
if ($nr==0) {
    $query="INSERT INTO usuarios(email,password,telefono) values ('$_REQUEST[user]','$contraseñaencriptada','$_REQUEST[phonenumber]')";
    $registro=mysqli_query($conexion,$query);
    echo("El registro se ha realizado correctamente");
    header("Location:"."../vista/index.html");
} else {
    echo("Ya hay un usuario con ese correo");
}
    if (!$conexion) {
        die("No hay conexción: ".mysqli_connect_error());
    }
    
    ?>
</body>
</html>