
 <?php include("vistaLogin/header.php");?>

<section>
        <div class="row">
            <div class="col-3">
                Healthy Lifestyle Gym ><span class="active">Foro</span>
            </div>
</section>
	
 <section class="contenedorformulario"> 
	<img src="../assets/images/login3.png">	 
        <div class="row">
			
            <h1>Foro</h1>
         <hr>
        </div>
	</section>
<main>
	<table>
		<tr class="tr">
		<th><h3>Titulo</h3></th>
		<th><h3>Fecha</h3></th>
		<th><h3>Respuestas</h3></th>
  
	</tr>
	
<?php 
		
		require_once("../modelo/Funciones_Crud.php");

		$resul =new Funciones_Crud();
		$resultado=$resul->mostrarForo();
		
        foreach ($resultado as $dato):
		
		$id = $dato->ID;
		$titulo = $dato->titulo;
		$fecha = $dato->fecha_inicio;
		$respuestas = $dato->respuestas;
		
		?>
			
		<tr class="tr">
       
			<td class="td"><?php echo $dato->titulo?></td>
			<td class="td"><?php echo date("d-m-y")?></td>
			<td class="td"><?php echo $dato->respuestas?></td>
	
			<td><a href="foro.php?id=<?php echo $dato->ID ?>"><input type="button" value="Ver"></a></td></tr>
		 			
	<?php  endforeach; ?>
			
	</table>
</section>
<br>
<a class="row" href="formulario.php"><input type="button" value="Crear Tema"></a>

	
	<h4><a href="../index.php">Inicio</a></h4>
<?php include("vistaLogin/footer.php");?>