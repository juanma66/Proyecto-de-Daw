<?php

     /*Registro de usuarios */

    require_once("../modelo/Funciones_Crud.php");
	
	$registro=new Funciones_Crud();
	
	$datos=$registro->registrarUsuario();//le pasamos el array de la conexion
	
	require_once("../vista/registro_user.php");


?>