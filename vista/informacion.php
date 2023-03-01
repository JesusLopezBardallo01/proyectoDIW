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
    <h1 class="text-center">UN POCO MÁS ACERCA DE NOSOTROS Y NUESTRO NEGOCIO</h1>

    <br>

    <div class="text-center">
        Somos dos jóvenes emprendedores que hemos decidido aprovechar nuestros conocimientos de desarrollo web y nuestro
        conocimiento acerca del juego de <br>
        cartas magic para llevar a cabo esta idea, al darnos cuenta de que hay una gran grieta en cuanto al alquiler de
        cartas se refiere y hemos pensado que mucha gente<br>
        puede estar interesada ya que se puede aprovechar para participar en torneos gastando una ínfima cantidad de
        dinero.<br>
    </div>
    <br>
    <img src="../images/torneo.jpg" alt="Torneo" class="mx-auto d-block" height="700" width="1000">
    <br>
    <div class="text-center">
        Un pequeño torneo que organizamos por nuestro estreno.<br>
        Esperamos veros en el próximo ;)
    </div>
    <br>
    <footer class="p-5 bg-warning">

        <p class="text-end mt-1 text-dark text-center" style="font-size: 25px">
            Daniel García Vázquez y Jesús López Bardallo<i class='bx bx-copyright'></i>
        </p>
    </footer>
</body>

</html>