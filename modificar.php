<?php
	session_start();

	if(isset($_SESSION['user']))
{
		
?>
	

				<!DOCTYPE html>
				<html lang="es">
				<head>
					<title>MODIFICAR PROPIETARIO</title>
					
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
										<h2>ACTUALIZACIÓN DE DATOS</h2>
									
						<br>
						
				 
				<?php

							require "config.php";

						if (isset($_GET['id']))
									{
					
											$sql	=  "SELECT *
											 			FROM propietarios 
														WHERE apto = :apto";
						
						
												try {
														$statement = $conexion->prepare($sql);
														$statement ->bindValue (':apto', $_GET['id'], PDO::PARAM_INT);
														$statement ->execute();
						
														$propietario = $statement->fetch(PDO::FETCH_ASSOC);
						
													}catch (PDOException $error){
															echo $error -> getMessage();
																				}
										} 			else { 
															echo "numero de apto no Existe";
															exit;
														}	

														

					if (isset($_POST['submit']))
					{

						$propietario = [
							"apto"					=> $_POST['apto'],
							"cc_propietario"		=> $_POST['cc_propietario'],
							"nombre_propietario"	=> $_POST['nombre_propietario'],
							"cc_residente"			=> $_POST['cc_residente'],
							"nom_residente"			=> $_POST['nom_residente'],
							"tel_fijo"				=> $_POST['tel_fijo'],
							"tel_cel_propietario"	=> $_POST['tel_cel_propietario'],
							"tel_ce_residente"		=> $_POST['tel_ce_residente']
							

						];

						$sql = "UPDATE propietarios
											SET  apto = :apto,
											cc_propietario = :cc_propietario,
											nombre_propietario = :nombre_propietario,
											cc_residente = :cc_residente,
											nom_residente = :nom_residente,
											tel_fijo = :tel_fijo,
											tel_cel_propietario = :tel_cel_propietario,
											tel_ce_residente = :tel_ce_residente

											WHERE apto = :apto";

											try {
												$statement =$conexion->prepare($sql);
												$statement -> execute ($propietario);

											}catch (PDOException $error){
													echo $error -> getMessage();
																		}

					}
				?>


			<?php if (isset($_POST['submit']) && $statement) { ?>
				<script type="text/javascript">
				alertify.success("Modificado con exito");	
				</script>
				
			<?php } ?> 

			<form role="form-group" name="guardar" id="guardar" method="post">

				<?php foreach ($propietario as $key => $value) : ?>
					<label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>
					<input type="text" class="form-control" type="text" name="<?php echo $key; ?>" apto="<?php echo $key; ?>" value="<?php echo $value; ?>" <?php echo ($key === 'apto' ? 'readonly' : null); ?>>

				<?php endforeach ?>
					<br>
				 <button class="btn btn-primary" type="submit" id="submit" name="submit" >Modificar</button>
				
			</form>
	



<?php

}else{ 
	header("location:index.php");

}

?>

	