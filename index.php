<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	
	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel panel-heading">Login Porteria</div>
						<div class="panel panel-body">
							<div style="text-aling: center;">
								<img src="img/3.jpg" height="185"></img>
							</div>
							<p></p>
							<label> Usuario </label>
							<input type="text" id="usuario" class="form-control input-sm" name="">
							<label> Password </label>
							<input type="password" id="password" class="form-control input-sm" name="">
							<p></p>
							<span class="btn btn-primary" id="iniciar">Entrar</span>
							<a href="registro.php" class="btn btn-danger">Registro</a>
						</div>
					</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>	

</body>

<footer>
	 	<center>
        <div class='define'>
            <p>Copyright 2019 © ∣ JHONATHAN GIRALDO Version 1.2</p>
        </div>
    </footer>	
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#iniciar').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Ingrese usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes Ingresar el password");
				return false;
			}

			cadena="usuario=" + $('#usuario').val() +
					"&password=" + $('#password').val();

					$.ajax({
						type:'POST',
						url:'php/login.php',
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="registroVis.php";
							}else{
								alertify.error("Usuario o contraseña no valida");
							}
						}
					});
		});
	});
</script>

