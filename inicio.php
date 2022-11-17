<?php
	session_start();

	if(isset($_SESSION['user'])){
?>

<html>
<head>
	<title>INICIO</title>
	
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="jumbotron">
				<a href="php/salir.php" class="btn btn-info">Cerrar Sesión</a>
				<a href="registroVis.php" class="btn btn-info" id="registrovisitantes">Registro visitantes</a>
				<a href="#" class="btn btn-info" id="consulta">Consulta Propietario</a>
				<a href="rdomicilio.php" class="btn btn-info" id="domicilio">Registro Domicilio</a>
					<h2>Ingreso Exitoso</h2>
					<br><br>
					<h2>BIENVENIDOS</h2>
					<br><br>
					<h3>Este es el registro de visitantes del edificio multifamiliar GUALANDAY</h3>
					<br>
					<h3>Registro de domicilios
						<br>
					Consulta de propietarios</h3>
				</div>
			</div>
		</div>
	</div>		
</body>
</html>

<?php

}else{ 
	header("location:index.php");

}

?>