<?php

     /*validad login */




    require_once("../modelo/Funciones_Crud.php");
	   
	$usuarios=new Funciones_Crud();//se instancia
	
	$usuarios->logease();//ahora con la instancia se llama al metodo
	
	require_once("../vista/login.php");





?>