   <?php

         function selecion(){

			 		 
	include 'vista/header.php';
	
	//segun la occion seleccionada se mostrar una página
    if (isset($_POST['Profesionales'])) {
        include 'vista/Profesionales.php';
    } elseif(isset($_POST['Actividades'])){
           include("vista/Actividades.php");
	} elseif(isset($_POST['Instalaciones'])){
           include("vista/Instalaciones.php");
	} elseif(isset($_POST['Tarifas'])){
           include("vista/tarifas.php");
 
     }else{
		include('vista/home.php');
	}
		
     include 'vista/footer.php'; 
		 }

  ?>