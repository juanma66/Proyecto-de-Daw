<?php 	session_start(); /*si se pone abajo sale un warni*/?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"/>
    <link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/fonts.css" />

    <title>index</title>
    <!-- Scripts -->
	<!--bibliotecas--->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/jquery.slides.js"></script>	
	<!--menu--->
	<script src="assets/js/util.js"></script>	
	<!--estilods generales-->
    <script src="assets/js/main.js"></script>
	<!--contador--->
    <script src="assets/js/contador.js"></script>	
	<!--cookies--->
    <script src="assets/js/cookies.js"></script>	
	<!--intalacion--->
    <script src="assets/js/slider.js"></script>  	
	<!-------boton de arriba-------->
	<script src="assets/js/botonSubir.js"></script>
	
</head>
<body>
<!-- HEADER -->
<header>
    <div class="inner">
        <spam class="logo"><img src="assets/images/logo.png"></spam>
        <!--NAV-->
        <nav id="nav">

        
			 <div class="dropdown">
         <form method="post" name="Home" action="index.php"><input type="submit" value="Healthy Lifestyle" name="Home"></form>
			</div>
			
            <div class="dropdown">
               <form method="post" name="Actividades" action="index.php"><input type="submit" name="Actividades" value="Actividades">
                <div class="dropdown-content">
                    <a href="#Alta" class="col-12">Intensidad Alta</a>
                    <a href="#Media" class="col-12">Intensidad Media</a>
                    <a href="#Baja" class="col-12">Intensidad baja</a>
                </div>
			</div></form>
      
            <div class="dropdown">
                <form method="post" name="Profesionales" action="index.php"><input type="submit" name="Profesionales" value="Profesionales">
                <div class="dropdown-content">
                    <a href="#trainers" class="col-12">Personal Trainers</a>
                    <a href="#fisioterapeutas" class="col-12">Fisioterapeutas</a>
                    <a href="#nutricionistas" class="col-12">Nutricionistas</a>
                </div>
            </div></form>
			
			 <div class="dropdown">
            <form method="post" name="Instalaciones" action="index.php"><input type="submit" name="Instalaciones" value="Instalaciones"></form>
			</div>
			
			<div class="dropdown">
			 <form method="post" name="Tarifas" action="index.php"><input type="submit" name="Tarifas" value="Tarifas Gym"></form>	
			</div>
			
			<div class="dropdown">	<div class="visi"> 
           <a href="controlador/controladorUsuarios.php" name="login" id="caja">Iniciar Sesión</a>
			</div></div>	

		
			<?php
		
			
	//renudar la session,rescata datos de la session
				
		if(isset($_SESSION['rol'])){
			/*desaparece iniciar sesion*/
	echo '<script type="text/javascript">elemento = document.getElementById("caja")
	elemento.style.display="none";</script>';
		
		switch($_SESSION['rol']){
			case 1:
					
			  if(isset($_SESSION['usuario'])){
				  		echo'<div class="dropdown separa">
							<a href="#">Administrador</a><div class="dropdown-content">
							<a href="vista/admin.php">Datos</a>
							<a href="vista/foro_index.php">Foro</a>
							</div></div>';
			  }				
				break;
				
			case 2:
			  if(isset($_SESSION['usuario'])){
				  			echo'<div class="dropdown separa">
							<a href="#">Zona usuario</a><div class="dropdown-content">
							<a href="controlador/controladorActualizarUsuario.php">Datos</a>
							<a href="vista/foro_index.php">Foro</a>
							</div></div>';
			  }		
				break;
				
			default:
				session_destroy();
                session_unset();
		  }	
		
		}		
			?>		
					
		    </div>	
        </nav>
	</header>      
		
	 <section class="cambio align-right ">
      
	<?php	
	//renudar la session,rescata datos de la session
				
		if(isset($_SESSION['rol'])){
		switch($_SESSION['rol']){
			case 1:
						if(isset($_SESSION['usuario'])){//si existe te pone el nombre		  
    echo "Administrador:<span class='active'> ".$_SESSION['usuario']."</span><br>";//para mostar el usuario
    	echo "<a href='modelo/cerrar-sesion.php'>Cerrar Sesión</a>";
						}
				break;
				
			case 2:
			if(isset($_SESSION['usuario'])){//si existe te pone el nombre		  
    echo "Usuario:<span class='active'> ".$_SESSION['usuario']."</span><br>";//para mostar el usuario
	echo "<a href='modelo/cerrar-sesion.php'>Cerrar Sesión</a>";			
			}
				break;
				
			default:
				session_destroy();
                session_unset();
		}	
	}
?>
		
	</section>
	
	
	

<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
<span class="subir icon-arrow-up2"></span>