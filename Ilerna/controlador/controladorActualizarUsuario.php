<?php

     /*Registro de usuarios */

    include("../modelo/User_modificar.php");
	
	$ac=new User_modificar();
	
	$datos=$ac->actualizarUsuario();//le pasamos el array de la conexion
	
   include("../vista/usuario_datos.php");

?>