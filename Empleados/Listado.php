<?php
$user = "root";
$pass = "santiago"; 
$server = "localhost";
$db = "reporte";
$con=mysqli_connect($server,$user,$pass,$db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="bavbar-toggler-icon" href="./Estilos/brand/Logo.ico">
    <link rel="stylesheet" href="./Estilos/dist/css/bootstrap.min.css">
    <title>Estados</title>
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
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
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
    <!--<link rel="stylesheet" href="est.css">-->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Registro interno</a>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0" >
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

    <div class="container-fluid">
        <div class="row">
            <main>
                <br>
                <br>
                <br>
                <br>
                <h2>Section title</h2>
                <br>

                <section>
                    <form method="post">
                        <input type="text" name="xnombre" placeholder="Nombre..">
                        <select name="xcarrera">
                            <option value="">Carrera</option>
                        </select>
                    </form>
                </section>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $sql = "SELECT `empleado`.*, `celular`.*
                            FROM `empleado` 
                                LEFT JOIN `celular` ON `empleado`.`celular_id` = `celular`.`id`;";
                            $result=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td>
                                    <?php echo $mostrar['id'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['nombre'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['departamento'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['cargo'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['id'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['marca'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['modelo'] ?>
                                </td>
                                <td>
                                    <?php echo $mostrar['mac'] ?>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>