<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Registro</title>
  <link rel="shortcut icon" href="./Estilos-plantilla/brand/Logo.ico">
  <meta http-equiv="refesh" content="1;">

  <link href="../Reporte v.0/Estilos-plantilla/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 222, 252, 0.575);
      border: solid rgba(0, 222, 252, .575);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 222, 252, .575), inset 0 .125em .5em rgba(0, 222, 252, .575);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand ">Registro interno</a>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html">Ficha Reporte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./sign-in/login.html">Sign-in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Estados</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <br><br>

  <main class="flex-shrink-0">                     
    <form method="post" action="./Logica/IngresarEmp.php">
      <fieldset>
        <div class="container">
          <h1 class="mt-5">Ficha Reporte Interno de Celulares</h1>
          <br>
          <hr>
          <br>
          <p class="lead">Fecha pedido</p>
          <input type="datetime" name="fechahora" class="form-control" step="1" value="<?php date_default_timezone_set("America/Bogota"); echo date("Y-m-d\ H-i-s");?>" readonly onmousedown="return false">
          <br>
          <p class="lead">Marca &nbsp; <input type="text" name="marca"  placeholder="Marca"> &nbsp;
            Modelo
            &nbsp; <input type="text" name="modelo" placeholder="Modelo"> &nbsp; Mac &nbsp; <input
              type="text" name="mac" placeholder="Mac"></p>
          <br>
          <p class="lead">Departamento &nbsp; <input type="text" name="departamento" placeholder="Deppartamento"> &nbsp; Cargo &nbsp; <input type="text" name="cargo" id="floatingInput" placeholder="Cargo"> &nbsp;
            Propietario &nbsp; <input type="text" name="nombre" id="floatingInput" placeholder="Nombre"> </p>
          <br>
          <p class="lead">Vigencia &nbsp; | &nbsp; Comienza &nbsp; <input type="datetime" name="fechahora" step="1" min="2013-01-01T00:00Z" max="2013-12-31T12:00Z" value="<?php echo date("Y-m-d\ H-i");?>" readonly onmousedown="return false">
            &nbsp; Termina &nbsp; <input type="datetime" name="fechahora" step="1" value="<?php echo date("Y-m-d\ H-i");?>" readonly onmousedown="return false"></p>
          <br>
          <hr>
          <br>
          <input type="submit" class="btn btn-primary btn-lg btn-block info" value="Guardar">
          <br>
        </div>
      </fieldset>
    </form>
    <br>
  </main>

  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">&copy;Irotama All rights reserved</span><br>
      <span class="text-muted">soporte: soporteirotama@gmail.com</span>
      <span class="text-muted">•</span>
    </div>
  </footer>
  <script src="script.js"></script>
  <script src="../Reporte v.0/Estilos-plantilla/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>