<?php

include("vistaLogin/header.php");

session_start();//para evitar el paso si no esta logeado

if(!isset($_SESSION['rol'])){
	header('location: login.php');
}else{
	if($_SESSION['rol']!=1){
		header('location: login.php');
	}
}

?>
<main>
	 <section class="contenedorformulario"> 
        <div class="row">
	<h1>Panel de administrador</h1>

	<?php
	echo "<spam class='active'>Administrador: ".$_SESSION["usuario"]."</spam><br><br>";//para mostar el usuario
	?>

	<?php
	
	include("../modelo/Funciones_Crud.php");
  
			$recoger=new Funciones_Crud();
			$registros=$recoger->mostraAmin();
			
	
/*----------insertar------------*/
	
			$inserar=$recoger->insertarAdmin();
			

		 
	?>
	
	


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table>
    <tr class="tr">
      <td><h4>Id</h4></td>
      <td><h4>Nombre</h4></td>
      <td><h4>Apellido</h4></td>
	  <td><h4>Correo</h4></td>
      <td><h4>Dirección</h4></td>
		  <td><h4>Contraseña</h4></td>
      <td><h4>Numero Rol</h4></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr> 
   <?php
	  
	  foreach($registros as $usuarios):
	  ?>
		
   	<tr class="tr">
      <td class="td"><?php echo($usuarios->id) ?> </td>
      <td class="td"><?php echo($usuarios->nombre) ?></td>
      <td class="td"><?php echo($usuarios->apellido) ?></td>
      <td class="td"><?php echo($usuarios->correo) ?></td>
	  <td class="td"><?php echo($usuarios->direccion) ?></td>
	  <td class="td"><?php echo($usuarios->password) ?></td>
	  <td class="td"><?php echo($usuarios->rol_id) ?></td>
 
		<!--borrar se le pasa el parametro -->
      <td class="bot"><a href="../modelo/eliminar.php?nombre=<?php echo $usuarios->nombre?>"><input type='button' name='del' id='del' value='Iliminar'></a></td>
		
		
		<!--modificar se le pasa el parametro -->
      <td class='bot'><a href="editar.php?id=<?php echo $usuarios->id?> & nom=<?php echo $usuarios->nombre?> & ape=<?php echo $usuarios->apellido?> & cor=<?php echo $usuarios->correo?> & dir=<?php echo $usuarios->direccion?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>  
	
	<?php
	
	  endforeach;
	?>
	
	
	
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado' required id="Nom"></td>
		<div id="res"></div>
      <td><input type='text' name='Ape' size='10' class='centrado' required></td>
		  <td><input type="email" name='Cor' size='10' class='centrado' required></td>
      <td><input type='text' name='Dir' size='10' class='centrado' required></td>
		 <td><input type='text' name='Pas' size='10' class='centrado' required></td>
      <td><input type="number" max="2" min="1"  name='Rol' size='10' class='centrado' required><br>1: Admin<br> 2: Usuario</td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
  </table>
	</form>
	

	</section>
		  </div>

	<h4><a href="../index.php">Inicio</a></h4>
	<h4><a href="../modelo/cerrar-sesion.php">Cerrar Sesion</a></h4>
</main>


<?php include("vistaLogin/footer.php");  ?>
