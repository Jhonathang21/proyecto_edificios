<?php
	session_start();

	if(isset($_SESSION['user'])){
		
?>
	

<!DOCTYPE html>
<html lang="es">
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
									<li><a href="consulta.php" class="btn btn-info" id="consulta">Consultar</a></li>
								</ul>
							</li>		
							<li><a href="rdomicilio.php" class="btn btn-info" id="domicilio">Registro Domicilio</a></li>
							<li><a href="php/salir.php" class="btn btn-info">Cerrar Sesión</a></li>
						</ul>	
					</nav>	
					
<div class="panel panel-primary">
	<div class="jumbotron">
						<h2>CONSULTA</h2>
					<form role="form-group" name="consulta" action="consulta.php" method="post">
		  <div class="form-group">
		  	<label>Nº Apto</label>
		    <input type="text" class="form-control" id="aptos" name="aptos" placeholder="# de apto">
			</div>
			  <button class="btn btn-primary" type="submit" id="consulta" name="consulta" >Consultar</button>
		  <button type="reset" class="btn btn-default">Cancelar</button>
		</form>
		<br><br><br>
		
 
<?php

require "config.php";

if (isset($_POST['consulta'])){
	
		$sql	=  "SELECT * 
					FROM propietarios 
					WHERE apto = :apto ";
		
		
	try {
		$statement = $conexion->prepare($sql);
		$statement ->bindParam (':apto', $_POST['aptos'], PDO::PARAM_INT);
		$statement ->execute();
		
		$res=$statement -> fetchAll();
		
	}catch (PDOException $error){
		echo $error -> getMessage();
	}
}

?>

<?php 

	if (isset($_POST['consulta'])){
		if ($res && $statement->rowCount() > 0) {
?>	

<script type="text/javascript">
alertify.success("Consulta con exito");	
</script>
	
		<table class="btn-primary" border="4" >
		<div class="col-sm-8">
				<tr>
					<th><font color="black"><center>Nº APTO</center></font></th>
					<th><font color="black"><center> PROPIETARIO</center></font></th>
					<th><font color="black"><center> RESIDENTE</center></font></th>
					<th><font color="black"><center>FIJO</center></font></th>
					<th><font color="black"><center>CELULAR PROPIETARIO</center></font></th>
					<th><font color="black"><center>CELULAR RESIDENTE</center></font></th>
					<th><font color="black"><center></center></font></th>
				</tr>
				
				

				<?php 
				foreach ($res as $filas) :
					?>
					
					<tr>
						<th width="60px"><input type="text" class="form-control" class="col-sm-1" placeholder="<?php echo $filas["apto"]?>" readonly></input></th>
						<th><input type="text" class="form-control" class="col-sm-1" placeholder="<?php echo $filas["nombre_propietario"]?>" readonly></input></th>
						<th><input type="text" class="form-control" class="col-sm-1" placeholder="<?php echo $filas["nom_residente"]?>" readonly></input></th>
						<th width="90px"><input type="text" class="form-control" class="col-sm-1" placeholder="<?php echo $filas["tel_fijo"]?>" readonly></input></th>
						<th width="110px"><input type="text" class="form-control" class="col-sm-1" placeholder="<?php echo $filas["tel_cel_propietario"]?>" readonly></input></th>
						<th width="110px"><input type="text" class="form-control" class="col-sm-1" placeholder="<?php echo $filas["tel_ce_residente"]?>" readonly></input></th>
						<td><center><a href="modificar.php?id=<?php echo $filas["apto"]; ?>"><img src="img/editar.png"></img> </a></center></td>
					</tr>
				
				<?php endforeach; ?> 
				
	</div>			
				
		</table>

		
<?php } else {?>
<script type="text/javascript">
alertify.alert('ERROR',"El apartamento no Existe");
</script>

<?php }

}
?>
	
</body>
<footer>
	 	<center>
        <div class='define'>
            <p>Copyright 2019 © ∣ JHONATHAN GIRALDO Version 1.2</p>
        </div>
    </footer>	
</html>


<?php

}else{ 
	header("location:index.php");

}

?>