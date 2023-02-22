<?php
// Configuración de la base de datos
$host = "localhost:3360";
$user = "root";
$password = "localhost:3306";
$database = "magic";

// Conexión a la base de datos
$mysqli = new mysqli($host, $user, $password, $database);

// Comprobar la conexión
if ($mysqli->connect_errno) {
  echo "Error al conectarse a la base de datos: " . $mysqli->connect_error;
  exit();
}

// Consulta para obtener los datos de la tabla "locales"
$sql = "SELECT nombre, imagen FROM locales";
$resultado = mysqli_query($mysqli, $sql);

// Crear un array para almacenar los datos de los locales
$locales = array();
while ($local = mysqli_fetch_assoc($resultado)) {
  $locales[] = $local;
}

// Devolver los datos de los locales en formato JSON
echo json_encode($locales);
?>