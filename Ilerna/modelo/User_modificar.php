<?php


class User_modificar{

	
   function actualizarUsuario(){
	   
     	require("Conexion.php");
	   
                 if(isset($_POST['actUser'])){
				
					 
		 session_start();

         $base=new Conexion();
					 
					 
	$UserNom=$_POST['UserNon']=$_SESSION['usuario'];			
	$UserApe=$_POST['UserApe'];
	$UserCor=$_POST['UserCor'];
	$UserDir=$_POST['UserDir'];
	$UserPas=$_POST['UserPas'];
			 			
					 /*Con join podemos modificar dos tablas a la vez*/
		$sql="update datos_usuario inner join usuarios on (datos_usuario.nombre=usuarios.username) set  
		datos_usuario.apellido=:miApe,
		datos_usuario.correo=:miCor,
		datos_usuario.direccion=:miDir,
		usuarios.password=:miPas
		where nombre=:miNom";

		
		$resultado=$base->connect()->prepare($sql);
					 
	     $resultado->execute(array(":miNom"=>$UserNom,":miApe"=>$UserApe, ":miCor"=>$UserCor,":miDir"=>$UserDir,"miPas"=>$UserPas));		

	  echo '<script language="javascript">alert("Usuario modificado: '.$UserNom.'");</script>';

     echo "<script>
               setTimeout(function() {
                    location.href = '../vista/usuario_datos.php';
               }, 0001);
           </script>";
			

					 
				 }}

}
						
?>