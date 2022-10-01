<?php
    include("conexion.php");

    
    if (isset($_POST['departamento']) && !empty($_POST['departamento'])){

        $con=mysqli_connect($server,$user,$pass,$db);

        $departamento = $_POST['departamento'];
        $cargo = $_POST['cargo'];
        $nombre = $_POST['nombre'];
        mysqli_query($con,("INSERT INTO empleado (id,nombre,departamento,cargo,jefe_inmediato_id,celular_id) VALUES ('2','$nombre','$departamento','$cargo','1','6')"));

    }
    

//INSERT INTO `empleado` (`id`, `nombre`, `departamento`, `cargo`, `jefe_inmediato_id`, `celular_id`) VALUES ('1', 'Santiago', 'Sistemas', 'Aprendiz', '1', '6');
//Una insercion en tabla empleado con conexion con tablas dos o mas tablas anexadas

?>