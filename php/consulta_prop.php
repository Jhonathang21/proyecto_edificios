<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$apto=$_POST['apto'];
		$cc_propietario=$_POST['cc_propietario'];
		$nombre_propietario=$_POST['nombre_propietario'];
		$cc_residente=$_POST['cc_residente'];
		$nom_residente=$_POST['nom_residente'];
		$tel_fijo=$_POST['tel_fijo'];
		$tel_cel_propietario=$_POST['tel_cel_propietario'];
		$tel_ce_residente=$_POST['tel_ce_residente'];
		
		
		
		

		
			$consulta="SELECT * 
						FROM propietarios 
						WHERE apto= apto ";
						
		echo $result=mysqli_query($conexion,$consulta);	
		

?>