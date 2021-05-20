<?php

     /*Insertar entradas en foro*/

    require_once("../modelo/Funciones_Crud.php");
	
	$registro=new Funciones_Crud();
	
	$datos=$registro->insertarForo();//le pasamos el array de la conexion
	
	require_once("../vista/foro.php");


?>