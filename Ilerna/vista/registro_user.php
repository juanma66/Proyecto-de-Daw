<?php include("vistaLogin/header.php");?> 

<main>
<section>
        <div class="row">
            <div class="col-3">
Healthy Lifestyle Gym ><span class="active">Registro</span>
			</div>
	 </div>
</section>


 <section class="contenedorformulario"> 
        <div class="row">
            <h1 class="">Registro Usuario</h1>   
			<hr>
        </div></section>


						<form action="../controlador/controladorRegistro.php" method="POST" role="form" id="mensajefor">
						
		   <fieldset>
	
			   
			   			      <div class="row">
	<label class="col-5" >Nombre*:</label><input type="text"  name="nombre" class="col-2" id="userx" placeholder="Nombre usuario" required onClick="mensajesError()"><br>
			   </div>
			   
			      <div class="row">
	<label class="col-5" >Apellidos*:</label><input type="text" name="apellido" class="col-2" id="apex" placeholder="Apellidos" required onClick="mensajesError()"><br>
			   </div>
				      <div class="row">
	<label class="col-5" >Correo*:</label><input type="email" name="correo" class="col-2" id="corx" placeholder="ej@hotmail.com" required onClick="mensajesError()"><br>
			   </div>
			   
			      <div class="row">
	<label class="col-5" >Dirección*:</label><input type="text" name="direccion" class="col-2" id="dirx" placeholder="calle/Av/Paseo" required onClick="mensajesError()"><br>
			   </div>


			      <div class="row">
	<label class="col-5" >Contraseña*:</label><input type="password" minlength="5" name="password" class="col-2" id="pass" placeholder="******" required onClick="mensajesError()"><br>
			   </div>
	
	<input type="submit" value="Insertar" name="insertar" id="mensaje">
		   </fieldset>		
	</form>




<h4><a href="../index.php">Inicio</a></h4>
</main>
<?php include("vistaLogin/footer.php");?>
		