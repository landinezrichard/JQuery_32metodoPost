<?php
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$mensaje=$_POST["mensaje"];
	
	if($nombre != "" && $email != "" && $mensaje != "")
		echo "Correcto";
	else
		echo "Incorrecto";
?>