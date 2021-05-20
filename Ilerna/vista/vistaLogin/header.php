	
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes"/>
    <link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/fonts.css" />

    <title>index</title>
<!-- Scripts -->
		<!---para los mensajes de error de los formularios-->

<link rel="stylesheet" type="text/css" href="../assets/js/alertifyjs/css/themes/default.css">


<script src="../assets/js/alertifyjs/alertify.js"></script>
	
	<!--bibliotecas--->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/jquery.slides.js"></script>
	
	<!--menu--->
	<script src="../assets/js/util.js"></script>
    <script src="../assets/js/main.js"></script>
	
	  <!---mensaje de formulario--->
	 <script type="text/javascript" src="../assets/js/mensaje_error_fol.js">

</script>
	
</head>
<body>
<!-- HEADER -->
<header>
    <div class="inner">
        <spam class="logo"><img src="../assets/images/logo.png"></spam>
        <!--NAV-->
        <nav id="nav">
			
			 <div class="dropdown">
         <form method="post" name="Home" action="../index.php"><input type="submit" value="Healthy Lifestyle" name="Home"></form>
			</div>
			
            <div class="dropdown">
               <form method="post" name="Actividades" action="../index.php"><input type="submit" name="Actividades" value="Actividades">
                <div class="dropdown-content">
                    <a href="#Alta" class="col-12">Intensidad Alta</a>
                    <a href="#Media" class="col-12">Intensidad Media</a>
                    <a href="#Baja" class="col-12">Intensidad baja</a>
                </div>
			</div></form>
      
            <div class="dropdown">
                <form method="post" name="Profesionales" action="../index.php"><input type="submit" name="Profesionales" value="Profesionales">
                <div class="dropdown-content">
                    <a href="#trainers" class="col-12">Personal Trainers</a>
                    <a href="#fisioterapeutas" class="col-12">Fisioterapeutas</a>
                    <a href="#nutricionistas" class="col-12">Nutricionistas</a>
                </div>
            </div></form>
			
			 <div class="dropdown">
            <form method="post" name="Instalaciones" action="../index.php"><input type="submit" name="Instalaciones" value="Instalaciones"></form>
			</div>
			
		  <div class="dropdown">
			 <form method="post" name="Tarifas" action="../index.php"><input type="submit" name="Tarifas" value="Tarifas Gym"></form>	
			</div>
        </nav>
		

</header>
<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
