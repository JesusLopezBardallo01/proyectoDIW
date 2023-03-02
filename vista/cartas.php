<?php
session_start();

if (isset($_SESSION['usuario']) && isset($_SESSION['password'])) {

} else {
    header("location: ../vista/errorlogin.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Langar' rel='stylesheet'>
    <style>
        nav {
            background-color: rgb(255, 255, 255);
        }

        body {
            font-family: 'Langar';
            font-size: 22px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" alt="Bootstrap" width="100" height="75">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../vista/home.php">Home</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../vista/locales.php">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../vista/cartas.php">Cartas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../vista/informacion.php">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger" href="../php/logout.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php
    $nombre = "localhost";
    $bd = "magic";
    $user = "root";
    $pass = "";

    $conn = mysqli_connect($nombre, $user, $pass, $bd);

    if (!$conn) {
        die("No hay conexión: " . mysqli_connect_error());
    }

    $sql = "SELECT fecha_inicio, fecha_fin FROM mazos_alquilados";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<h1>Fechas en uso:</h1>";
        echo "<ul>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<li>Fecha de inicio: " . $fila["fecha_inicio"] . " | Fecha de fin: " . $fila["fecha_fin"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No hay fechas en uso.";
    }
    ?>
    <script>
        $(document).ready(function () {
            // Función para cargar las cartas al hacer clic en un mazo
            $('.mazo').click(function () {
                var nombre_mazo = $(this).text();
                var url_api = 'https://api.scryfall.com/cards/search?q=is%3Abooster';
                $.getJSON(url_api, function (data) {
                    var cartas = data.data;
                    var num_cartas = 60;
                    var random_cards = [];
                    for (var i = 0; i < num_cartas; i++) {
                        random_cards.push(cartas[Math.floor(Math.random() * cartas.length)]);
                    }
                    var html = '';
                    for (var i = 0; i < random_cards.length; i++) {
                        if (random_cards[i].image_uris) {
                            html += '<div class="col-md-4"><img src="' + random_cards[i].image_uris.normal + '" alt="' + random_cards[i].name + '"></div>';
                        } else {
                            html += '<div class="col-md-4"><p>' + random_cards[i].name + '</p></div>';
                        }
                        if ((i + 1) % 3 == 0) {
                            html += '</div><div class="row">';
                        }
                    }
                    $('#cartas').html('<h4>Cartas:</h4><div class="row">' + html + '</div>');
                    $('#nombre_mazo').html(nombre_mazo);
                });
            });


            $('.agregar-mazo').click(function () {
                var nombre_mazo = $(this).prev('.mazo').text();

                alert('Se ha seleccionado el mazo.');
            });
        });
    </script>
    <br>
    <form action="../php/registropedido.php" method="post">
        <ul>
            <li class="mazo">Generar un mazo</li>
            Fecha de inicio: <input type="date" name="fechainicio" required>&ensp;
            Fecha de fin: <input type="date" name="fechafin" required>&ensp;
            <label id="numero-generado"></label>&ensp;
            <button class="agregar-mazo">Agregar</button>
            <input type="text" name="precio" id="precio" style="visibility: hidden;">
        </ul>
    </form>
    <script>
        var fechaInicio = document.getElementsByName("fechainicio")[0];
        var fechaFin = document.getElementsByName("fechafin")[0];
        var btnAgregar = document.getElementsByClassName("agregar-mazo")[0];


        fechaInicio.addEventListener("input", function () {
            fechaFin.min = fechaInicio.value;
            if (fechaFin.value < fechaFin.min) {
                fechaFin.value = fechaFin.min;
            }
        });


        fechaFin.addEventListener("input", function () {
            fechaInicio.max = fechaFin.value;
            if (fechaInicio.value > fechaInicio.max) {
                fechaInicio.value = fechaInicio.max;
            }
        });

        const mazoBtn = document.querySelector('.mazo');


        mazoBtn.addEventListener('click', function () {

            const num = Math.floor(Math.random() * (17 - 7 + 1)) + 7;


            const label = document.getElementById('numero-generado');

            const precio = document.getElementById('precio');

            label.innerHTML = num + "€";
            precio.value = num + "€";
        });
    </script>
    <h2 id="nombre_mazo"></h2>
    <div id="cartas"></div>
    <footer class="p-5 bg-warning">

        <p class="text-end mt-1 text-dark text-center" style="font-size: 25px">
            Daniel García Vázquez y Jesús López Bardallo<i class='bx bx-copyright'></i>
        </p>
    </footer>

</body>

</html>