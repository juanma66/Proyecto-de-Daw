
<?php include("vistaLogin/header.php");?>

 <main id="content_tasas">
 <section>
        <div class="row">
            <div class="col-3">
Healthy Lifestyle Gym ><span class="active">Iniciar Sesión</span>
			</div>
	 </div>
</section>
 

	 <section class="contenedorformulario"> 
	<img src="../assets/images/login3.png">	 
        <div class="row">
			
            <h1>Inicia Sesión</h1>
         <hr>
        </div>
		 
	 <form action="../controlador/controladorUsuarios.php" method="POST" id="mensajefor">
	
		   <fieldset id="recuadro" class="recuadro">
			   <div class="row">
	  <label class="col-5">Usuario*:</label><input type="text" name="username" class="col-2" required id="userx" placeholder="nombre usuario"  ><br>
			    </div>
			      <div class="row">
	<label class="col-5" >Contraseña*:</label><input type="password" name="password"  class="col-2" required id="pass" placeholder="********"><br>
			   </div>
			 
		
	<input type="submit" value="Inicia sesion" id="mensaje" name="enviarLogin">
				   </fieldset>
	</form>
	</section>
		  </div>

<h4><a href="../controlador/controladorRegistro.php">Registrarse</a></h4>
<h4><a href="../index.php">Inicio</a></h4>
</main>
<?php include("vistaLogin/footer.php");?>
