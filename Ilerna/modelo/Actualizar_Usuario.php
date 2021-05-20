	<?php


	include("Conexion.php");

	  $db=new Conexion();
	   
	   
	if(!isset($_POST['bot_actualizar'])){
		
	/*rescate los datos de admin*/
	$id=$_GET['id'];
	$nom=$_GET['nom'];
	$ape=$_GET['ape'];
	$cor=$_GET['cor'];
	$dir=$_GET['dir'];
	
	}else{
     $Id=$_POST['id'];
	$Nom=$_POST['nom'];
	$Ape=$_POST['ape'];
	$Cor=$_POST['cor'];
	$Dir=$_POST['dir'];
		
		
		$sql="update datos_usuario set  
		nombre=:miNom,
		apellido=:miApe,
		correo=:miCor,
		direccion=:miDir
		where nombre=:miNom";
			
		
		$resultado=$db->connect()->prepare($sql);
	     $resultado->execute(array(":miNom"=>$Nom,":miApe"=>$Ape, ":miCor"=>$Cor,":miDir"=>$Dir));
		
		  	  echo '<script language="javascript">alert("Usuario: '.$Nom.' atualizado");</script>';

     echo "<script>
               setTimeout(function() {
                    location.href = '../vista/admin.php';
               }, 0001);
           </script>";

		
	}

	
	?>
	