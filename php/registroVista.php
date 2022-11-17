<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$cedula=$_POST['cedula'];
		$nombre=$_POST['nombre'];
		$apto=$_POST['apto'];
		$fechaHora=$_POST['fechaHora'];
		
		

		
			$insertar="INSERT into visitantes (cedula,nombre,apto,fechaHora)
						VALUES ('$cedula','$nombre','$apto',NOW())";
		echo $result=mysqli_query($conexion,$insertar);	
		

?>