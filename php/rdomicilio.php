<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$cedula=$_POST['cedula'];
		$nombre=$_POST['nombre'];
		$apto=$_POST['apto'];
		$empresa=$_POST['empresa'];
		$fechaHora=$_POST['fechaHora'];

		$domi="INSERT into domicilio (cedula,nombre,apto,empresa,fechaHora)
						VALUES ('$cedula','$nombre','$apto','$empresa',NOW())";
		echo $result=mysqli_query($conexion,$domi);	

?>				