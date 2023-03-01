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
    //DATOS DE CONEXION A LA BASE DE DATOS
    $nombre="localhost";
    $bd="magic";
    $user="root";
    $pass="";
    
    //CONEXION
    $conn=mysqli_connect($nombre,$user,$pass,$bd);

    //OBTENCION DE LOS DATOS
    $user=$_POST["user"];
    $password=$_POST["password"];

    //MENSAJE DE ERROR SI NO HAY CONEXION
    if (!$conn) {
        die("No hay conexión: ".mysqli_connect_error());
    }
    //SE BUSCA EN LA BASE DE DATOS EL USUARIO
    $query= mysqli_query($conn,"Select password from usuarios where email='".$user."'");

    //SE ALMACENA EL NUMERO DE FILAS DEVUELTO
    $nr=mysqli_num_rows($query);

    //SE RECOGE LA CONTRASEÑA QUE HA DEVUELTO LA CONSULTA
    $pass=mysqli_fetch_row($query);

    //SI LOS CAMPOS USUARIO Y CONTRASEÑA DEL FORMULARIO NO ESTAN VACIOS
    if ($user!=NULL && $password!=NULL) {

        //SI EL NUMERO DE FILAS DEVUELTO POR LA CONSULTA ES MAYOR DE 0 SE DECLARA UNA VARIABLE QUE COMPARA LAS CONTRASEÑAS
        if ($nr>0) {
            $verificar=password_verify($password,$pass[0]);

        //SI NO SE DECLARA UNA VARIABLE NULA
        } else {
            $verificar=NULL;
        }
    
    //SI NO SE DECLARA UNA VARIABLE NULA
    } else {
        $verificar=NULL;
    }

    //SI LAS CONTRASEÑAS COINCIDEN SE CREA UNA SESION QUE ALMACENA LOS DATOS Y SE REDIRIGE 
    if ($verificar) {
            session_start();
            $_SESSION['usuario']=$_POST['user'];
            $_SESSION['password']=$_POST['password'];                
            header("location: ../vista/home.php");
        
        //SI NO SE MUESTRA UN ENLACE PARA VOLVER A INTENTAR INICIAR SESION
    } else {
            header("location: ../vista/errorlogin.html");
    }
    
    ?>
</body>
</html>