
 <?php include("vistaLogin/header.php");?>

   
<section>
        <div class="row">
            <div class="col-3">
                Healthy Lifestyle Gym ><span class="active">Foro-Comentarios</span>
            </div>
</section>
<hr>
<?php
	include("../modelo/Conexion.php");

    $db=new Conexion();	
	if(isset($_GET["id"]))
	$id = $_GET['id'];

/*bloque del autor creador del tema----------------*/

	$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha_inicio DESC";

	$result = $db->connect()->prepare($query); 
    $result->execute();
    $resultado = $result->fetchAll(PDO::FETCH_OBJ);

        foreach ($resultado as $dato):
		
		$id = $dato->ID;
		$titulo = $dato->titulo;
		$autor=$dato->autor;	
		$contenido=$dato->contenido;	
		$fecha = $dato->fecha_inicio;
		$respuestas = $dato->respuestas;
		?>
		<div class="row content_foro">
	<span col-2></span>
		<article class="col-12">
		   <div class="col-2 conAutor">
			   <h5>Autor:<?php echo $dato->autor?></h5>
			   <h5>Creado: <?php echo $dato->fecha_inicio ?></h5>
			    <h5><?php echo $dato->respuestas ?> Mensajes</h5>
			</div>	
			
			<div class="col-8 coCome">
			<div><h3><?php echo $dato->titulo?></h3></div>
	        <h5><?php echo $dato->contenido?></h5>			
	  		 </div>
			  
		<?php echo "<div class='align-right'><a href='formulario.php?id&respuestas=$respuestas&identificador=$id'><input type='button' value='Responder'></a></div>";?>		
       </article><br>
		<span col-2></span>
	<?php		
    endforeach; 

			 
			
	$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY fecha_inicio DESC";

	$db2=new Conexion();	
	$result2 = $db2->connect()->prepare($query2); 
    $result2->execute();

 $resultado2 = $result2->fetchAll(PDO::FETCH_OBJ);


   
 /*este for recorre u muestra los comentario de las personas que han escrito en este tema*/

        foreach ($resultado2 as $dato2):

		$id = $dato2->ID;
		$titulo = $dato2->titulo;
		$autor = $dato2->autor;
		$contenido = $dato2->contenido;
		$fecha_inicio = $dato2->fecha_inicio;
		$respuestas = $dato2->respuestas;
		?>
			
		<article>
		   <div class="conAutor">
			   <div class="">Autor:<?php echo $dato2->autor?></div>
			   <p class="" >Creado: <?php echo $dato2->fecha_inicio ?><p>
			    <p class="" ><?php echo $dato2->respuestas ?> Mensajes<pv>
			</div>	
			
			<div class="coCome">
				<div class=""><h3><?php echo $dato2->titulo?></h3></div>
	        <div class=""><?php echo $dato2->contenido?></div>			
	  		
			   </div>
			   
			 <?php echo "<div class='align-right'><a href='formulario.php?id&respuestas=$respuestas&identificador=$id'><input type='button' value='Responder'></a></div>";?>	
					
			   </article><br> 	
			
          <?php endforeach;?>
			
			</div>
 <h4><a href="foro_index.php">Volver</a></h4>
	 	<h4><a href="../index.php">Inicio</a></h4>

<?php include("vistaLogin/footer.php");?>