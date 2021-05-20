
 <?php include("vistaLogin/header.php");?>


<?php
	if(isset($_GET["respuestas"]))
		$respuestas = $_GET['respuestas'];
	else
		$respuestas = 0;
	if(isset($_GET["identificador"]))
		$identificador = $_GET['identificador'];
	else
		$identificador = 0;
?>

<section>
        <div class="row">
            <div class="col-3">
                Healthy Lifestyle Gym ><span class="active">Foro-Formulario</span>
            </div>
</section>
	
 <section class="contenedorformulario"> 
	<img src="../assets/images/login3.png">	 
        <div class="row">
			
            <h1>Foro</h1>
         <hr>
        </div>

<form name="form" action="../controlador/controladorForo.php" method="post">
	 <fieldset id="recuadro" class="recuadro">

         
	<input type="hidden" name="identificador" value="<?php echo $identificador;?>">
	<input type="hidden" name="respuestas" value="<?php echo $respuestas;?>">
  
		
   
		   <div class="row">
			   <label class="col-5">Titulo*:</label>			  
                  <input type="text" name="titulo" class="col-2" required>
				 </div>		
   
		 
		   <div class="row">
      <label class="col-5 ">Contenido*:</label></td>
      <textarea name="contenido" class="col-4"  required></textarea>
        </div>


		 </fieldset>
	<br>
	<input type="submit" id="submit" name="submit" value="Insertar comentario">
	<br>
  </form>
	    <h4><a href="foro_index.php">Volver</a></h4>
	 	<h4><a href="../index.php">Inicio</a></h4>
	 
<?php include("vistaLogin/footer.php");?>