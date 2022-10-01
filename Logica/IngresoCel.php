<?php

	include("./conexion.php");
    //Logica\ConexionBD\conexion.php

    echo "no se";

	if (isset($_POST['marca']) && !empty($_POST['marca'])) {
		
		$con=mysqli_connect($server,$user,$pass,$db);

		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$mac = $_POST['mac'];
		mysqli_query($con,("INSERT INTO celular (marca,modelo,mac) VALUES ('$marca','$modelo','$mac')"));
		echo "<p> datos insertados </p>";
	}else {
		echo "<p> error al insertar datos </p>";
	}

?>