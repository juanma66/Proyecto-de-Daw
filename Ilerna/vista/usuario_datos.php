<?php

include("vistaLogin/header.php");

session_start();

include_once '../modelo/Conexion.php';
$base=new Conexion();

/*si no esta logueado*/
if (!isset ($_SESSION['usuario'])){
    header('Location: login.php');
};


/*recuperar los datos del usuario logueado*/

$sql = ("SELECT nombre, apellido, correo, direccion, username, password  FROM datos_usuario inner join usuarios on datos_usuario.nombre=usuarios.username WHERE nombre='".$_SESSION['usuario']."'");

$ej = $base->connect()->prepare($sql);
$ej->execute();

$resultado = $ej->fetchAll(PDO::FETCH_OBJ);

?>

<main></main>
<section>
        <div class="row">
            <div class="col-3">
Healthy Lifestyle Gym ><span class="active">Mi Gestión</span>
			</div>
	 </div>
</section>

 <section class="contenedorformulario"> 
	
        <div class="row">
            <h1>Datos:</h1>   
        </div></section>


 <hr>
<form action="../controlador/controladorActualizarUsuario.php" method="post">
	 <fieldset> 
		 
		 
<?php foreach ($resultado as $dato):   ?> 
             
	
     <div class="row">
	   <label class="col-5" >Nombre</label><input type='text' name='UserApe' class="col-2"  size='10' class='centrado' required value="<?php echo $dato->nombre?>" disabled></div>
	
	  <div class="row">
       <label class="col-5" >Apellido:</label> <input type='text' name='UserApe' size='10' class="col-2" required value="<?php echo $dato->apellido?>"></div>
	
	  <div class="row">
	    <label class="col-5" >Correo:</label><input type="email" name='UserCor' size='10' class="col-2" required value="<?php echo $dato->correo?>"></div>
	
	  <div class="row">
       <label class="col-5" > Dirección:</label><input type='text' name='UserDir' size='10'class="col-2" required value="<?php echo $dato->direccion?>"></div>
	
	
	  <div class="row">
		  <label class="col-5">Contraseña:</label><input type='text' name='UserPas' size='10'class="col-2" required value="<?php echo $dato->password?>"></div>
		 
		                  <?php
                           	  endforeach;
							  ?>


				  	<!--modificar se le pasa el parametro -->
     <div class='bot'><a href="#?nom=<?php echo $dato->nombre?> & ape=<?php echo $dato->apellido?> & cor=<?php echo $dato->correo?> & dir=<?php echo $dato->direccion?> & pas=<?php echo $dato->password?>"><input type="submit" name='actUser' id='actUser' value='Actualizar'></a></div>
  
			
  </fieldset>	
</form>



	<h4><a href="../index.php">Inicio</a></h4>
	<h4><a href="../modelo/cerrar-sesion.php">Cerrar Sesion</a></h4>
</main>

<?php include("vistaLogin/footer.php");?>
