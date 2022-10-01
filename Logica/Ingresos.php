<?php
	include("IngresarCel");

	include("IngresarEmp");

	if (include("IngresarCel") == true && include("IngresarEmp") == true){
		echo "Conexion correxta";
	}else{
		echo "Conexion Fallida";
	}
?>