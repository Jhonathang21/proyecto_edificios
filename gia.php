<?php
	session_start();

	if(isset($_SESSION['user'])){
?>

<html>
<head>
	<title>CONSULTAR PROPIETARIO</title>
	
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
									<li><a href="#" class="btn btn-info" id="consulta">Consultar</a></li>
									<li><a href="#" class="btn btn-info" id="consulta">Modificar</a></li>
								</ul>
							</li>		
							<li><a href="rdomicilio.php" class="btn btn-info" id="domicilio">Registro Domicilio</a></li>
							<li><a href="php/salir.php" class="btn btn-info">Cerrar Sesión</a></li>
						</ul>	
					</nav>	
<div class="panel panel-primary">
	<div class="jumbotron">
						<h2>CONSULTA DE PROPIETARIO</h2>
					<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		  	<label>Nº Apto</label>
		    <input type="text" class="form-control" id="apto" name="apto" placeholder="# de apto">
			</div>
<?php

	if (isset($POST['submit'])) {
		
		if
			<table>
				<tr>
					<th>apto</th>
					<th>cc_propietario</th>
					<th>nombre_propietario</th>
					<th>cc_residente</th>
					<th>nom_residente</th>
					<th>tel_fijo</th>
					<th>tel_cel_propietario</th>
					<th>tel_ce_residente</th>
				</tr>
			</table>
?>			
<? php foreach 			
		  
		  <span class="btn btn-primary" id="registrar">Consultar</span>
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
<?php
date_default_timezone_set('America/Bogota');
$fechaHora=date("d-m-y H:m:s");
?>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#consultar').click(function(){
			
			if($('#apto').val()==""){
				alertify.alert("Debes agregar el Numero de apto");
				return false;
		

			cadena="cedula=" + $('#cedula').val();

					$.ajax({
						type:"POST",
						url:"php/consulta_prop.php",
						data:cadena,
						success:function(r){
							
							if(r==1){
								alertify.success("consulta con exito");
							}else{
								alertify.error("Apto no Existe");
								
								
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