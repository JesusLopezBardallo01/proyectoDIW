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
  <div class="container">
    <input id="search-box" type="text" placeholder="Buscar...">
    <br><br>
    <div class="row">
      <div class="col-md-6">
        <div id="map" style="height: 400px;width: 550px"></div>
        <script src="../vista/script.js"></script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqJCsU1LscVa4cmH5EV8RkBUg22jtFTDM&callback=initMap&libraries=places&v=weekly"></script>
      </div>
      <div class="col-md-6">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Local en Lebrija
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>10 Av. Océano Atlántico</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Local en Cádiz
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>16 Av. las Cortes de Cádiz</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Local en Trebujena
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>32 Av. de Chipiona</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Local en Jerez
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>50 C. Gravina</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Local en Sevilla
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>26 C. Muro de los Navarros</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Local en Marte
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong><a href="https://www.starhomes.rocks">Featuring StarHomes</a></strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <footer class="p-5 bg-warning">
    <p class="text-end mt-1 text-dark text-center" style="font-size: 25px">
      Daniel García Vázquez y Jesús López Bardallo<i class='bx bx-copyright'></i>
    </p>
  </footer>
</body>

</html>