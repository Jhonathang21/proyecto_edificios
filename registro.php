<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO</title>
	
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">

<br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-danger">
						<div class="panel panel-heading">
							Registro Portero
						</div>
						<div class="panel panel-body">
							<div style="text-aling: center;">
								<img src="img/3.jpg" height="185"></img>
							</div>
							<form id="rmregistro">
								<p></p>
							<label> Nombre </label>
							<input type="text" id="nombre" class="form-control input-sm"  name="">
							<label> Apellido </label>
							<input type="text" id="apellido" class="form-control input-sm" name="">
							<label> Usuario </label>
							<input type="text" id="usuario" class="form-control input-sm" name="">
							<label> Password </label>
							<input type="password" id="password" class="form-control input-sm" name="">
							<p></p>
							<span class="btn btn-primary" id="registrar">Registrar</span>
							</form>
							<div style="text-align: right;">
								<a href="index.php" class="btn btn-default">login</a>
							</div>	
						</div>
				
					</div>
			
				</div>
			<div class="col-sm-4"></div>
		</div>
	</div>	
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrar').click(function(){
			
			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			} else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			} else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +	
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() +
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){
							
							if(r==2){
								alertify.alert("Este Usuario ya existe");
							}
							else if(r==1){
								$('#rmregistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Error de registro");
							}
						}
					});	
		});
	});
</script>