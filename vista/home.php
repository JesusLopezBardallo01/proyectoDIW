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
            <a class="nav-link btn btn-danger" href="../php/logout.php">Cerrar sesi??n</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <h1 class="text-center">BIENVENIDO A NUESTRO SITIO WEB</h1>

  <br>

  <div class="text-center"><strong>Tu sitio de confianza para alquiler de cartas a precio competitivo</strong></div><br>


  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/ajani.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/chandra.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../images/tia.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Planeswalker
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Es un tipo de carta permanente que representa a uno de los tipos de seres m??s poderosos en la
                  trama de Magic.</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Hechizos,Instant??neos y Encantamientos
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Los hechizos instant??neos tienen la misma definici??n que los conjuros con una ??nica diferencia,
                  y es que los hechizos instant??neos pueden ser ejecutados en cualquier momento.</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Criaturas
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Las criaturas son unos hechizos permanentes, con una fuerza y una resistencia determinadas. La
                  resistencia marca el n??mero de puntos que tiene que recibir para que sea destruida, y el ataque se??ala
                  el da??o que puede causar esa criatura.Algunas criaturas tambi??n tienen habilidades fuera de las 5
                  b??sicas, que se juegan como hechizos instant??neos.</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Tierras
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Las tierras son los permanentes con los que pagas los costes de ejecuci??n del resto de
                  hechizos.</strong>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Artefactos
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Los artefactos son permanentes con diversas habilidades. Que se pueden jugar como hechizos
                  instant??neos.</strong>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img src="../images/cartas.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>


  <br>

  <footer class="p-5 bg-warning">

    <p class="text-end mt-1 text-dark text-center" style="font-size: 25px">
      Daniel Garc??a V??zquez y Jes??s L??pez Bardallo<i class='bx bx-copyright'></i>
    </p>
  </footer>

</body>

</html>