<?php
   
  	 include("Conexion.php"); 
      $base=new Conexion();	   


    $nombre=$_GET["nombre"];
	$base->connect()->query("delete from datos_usuario where nombre='$nombre'");
	   


     	  echo '<script language="javascript">alert("Usuario: '.$nombre.' eliminado");</script>';

     echo "<script>
               setTimeout(function() {
                    location.href = '../vista/admin.php';
               }, 0001);
           </script>";

   	
	?>
	

