<?php
	session_start();

	if(isset($_SESSION['user'])){
?>

<html>
<head>
	<title>REGISTRO VISITANTES</title>
	
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">



<br>
	<div class="container">
	
		<div class="row">
			<div class="col-sm-10">
				<nav class="navegador" align="center">
						<ul class="menu">
							<li><a href="registroVis.php" class="btn btn-info" id="registrovisitantes">Registro visitantes</a></li>
							<li><a href="#" class="btn btn-info" id="consulta">Propietarios</a>
								<ul class="submenu">
									<li><a href="consulta.php" class="btn btn-info" id="consulta">Consultar</a></li>
								</ul>
							</li>		
							<li><a href="rdomicilio.php" class="btn btn-info" id="domicilio">Registro Domicilio</a></li>
							<li><a href="php/salir.php" class="btn btn-info">Cerrar Sesión</a></li>
						</ul>	
					</nav>	
<div class="panel panel-primary">
	<div class="jumbotron">
						<h2>REGISTRO VISITANTES</h2>
					<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		  	<label>Numero de Cedula</label>
		    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="# de cedula">
			</div>
		  <div class="form-group">
		    <label>Nombre Completo</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label>Apartamento</label>
		    <input type="text" class="form-control" id="apto" name="apto" placeholder="# de Apartamento cambie la letra por numero ej: torre f 6">
		  </div>
		  <div class="form-group">
		    <label>Fecha </label>
		    <input type="date" class="form-control" id="fechaHora" name="fechaHora" placeholder="<?= $fechaHora ?>">
		  </div>
		  <span class="btn btn-primary" id="registrar">Registrar</span>
		  <button type="reset" class="btn btn-default">Cancelar</button>
		</form>
		
</div>		
		</div>
		</div>
		</div>
				</div>
			</div>
		</div>
	</div>		
</body>
<footer>
	 	<center>
        <div class='define'>
            <p>Copyright 2019 © ∣ JHONATHAN GIRALDO Version 1.2</p>
        </div>
    </footer>	
<?php
date_default_timezone_set('America/Bogota');
$fechaHora=date("d-m-y H:m:s");
?>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#registrar').click(function(){
			
			if($('#cedula').val()==""){
				alertify.alert("Debes agregar el Numerode cedula del visitante");
				return false;
			}else if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre completo");
				return false;
			} else if($('#apto').val()==""){
				alertify.alert("Debes agregar el numero del apartamento");
				return false;
			} else if($('#fechaHora').val()==""){
				alertify.alert("Debes agregar la fecha Actual");
				return false;
			}

			cadena="cedula=" + $('#cedula').val() +	
					"&nombre=" + $('#nombre').val() +
					"&apto=" + $('#apto').val() +
					"&fechaHora=" + $('#fechaHora').val();

					$.ajax({
						type:"POST",
						url:"php/registroVista.php",
						data:cadena,
						success:function(r){
							
							if(r==1){
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Error de registro");
								
								
							}
						}
					});	
		});
	});
</script>

<?php

}else{ 
	header("location:index.php");

}

?>