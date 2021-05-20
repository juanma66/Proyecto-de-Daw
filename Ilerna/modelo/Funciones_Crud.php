<?php



    class Funciones_Crud{
						  
			  	
	/*funcion que identifica al usuario-------------------------------------------------------------------*/
          function logease(){
          session_start();
	      require("Conexion.php");

	
           if(isset($_POST['username']) && isset($_POST['password'])){//si se han introducido los dos campos
			   
			   
			                    /*mensaje de error*/
                 	if(!isset($_SESSION['rol']) or $_SESSION['rol']!=1){
	                echo '<div class="error">Error, usuario o contraseña incorrectas</div>';	
                     }
	
			   		   
			   $username=$_POST['username'];
			   $password=$_POST['password'];
			   
			   $_SESSION['usuario']=$_POST['username'];//gualdamos el nombre del usuario, el variable super global para mostrar luego
			   
     		   $db=new Conexion();
			   $query=$db->connect()->prepare('select * from usuarios where username=:username and password=:password');
			   
			   $query->execute(['username'=>$username,'password'=>$password]);
			   
			   $row=$query->fetch(PDO::FETCH_NUM);

			   if($row==true){		   
				   $rol=$row[3];//tercera columna de la tabla donde tiene el campo rol
				   $_SESSION['rol']=$rol;
				   
			switch($_SESSION['rol']){//controlamos lo que se visualiza con el rol, depende de numero almacenado en la bd en la tabla rol_usuario
			case 1:
				header('location: ../vista/admin.php');
				break;
			case 2:
				header('location: ../index.php');
				break;
				
			default:
				session_unset();				
          	    session_destroy();
				}							   
	      }			   
       }
      }
	

	/*Funcion que inserta usuarios nuevos------------------------------------------------------------------------------------------------*/
	          function registrarUsuario(){

	            require("Conexion.php");	
	   
                if(isset($_POST['insertar'])){
	
	           $nombre=$_POST["nombre"];
               $apellido=$_POST["apellido"];
	           $correo=$_POST["correo"];
	           $direccion=$_POST["direccion"];
	           $username=$_POST["nombre"];
	           $password=$_POST["password"];

	              $db=new Conexion();
	
		        /* evitar duplicaciones*/		
            $sql = "select count(*) from datos_usuario where nombre ='$nombre'";
		
              if ($resultado = $db->connect()-> query($sql)) {

                /* Comprobar el número de filas que coinciden con la sentencia SELECT */
                  if ($resultado->fetchColumn() > 0) {

                     /* Ejecutar la sentencia SELECT para mostrar el nombre duplicado*/
                   $sql = "select nombre from datos_usuario where nombre = '$nombre'";
                    foreach ($db->connect()->query($sql) as $fila) {
         
		                 $duplicado=$nombre;
                       }	

	         echo '<script language="javascript">alert("Usuario duplicado: '.$duplicado.' ya esta en uso.");</script>';

             echo "<script>
               setTimeout(function() {
                    location.href = '../vista/registro_user.php';
               }, 0001);
              </script>";			   
             }
    
            /* No coincide ningua fila inserta */
            else {		
			/*no hay duplicaciones insertamos*/
	
      $query=$db->connect()->prepare("insert into datos_usuario (nombre, apellido, correo, direccion)
	  values (:nombre, :apellido, :correo,:direccion)");			   
      $query->execute(array(":nombre"=>$nombre, ":apellido"=>$apellido,":correo"=>$correo,"direccion"=>$direccion));
	
	/*----------------segunda tabla-----------------------------*/
	  $db=new Conexion();
	  
	    $sql2="insert into usuarios(username, password, rol_id) values (:username, :password, :rol_id)";
	    $query=$db->connect()->prepare($sql2);
			   
      $query->execute(array(":username"=>$nombre, ":password"=>$password, ":rol_id"=>2));
	
		 echo'<script type="text/javascript">
          alert("Usuario registrado");
         </script>';
	
	  
	      echo "<script>
               setTimeout(function() {
                    location.href = '../vista/login.php';
               }, 0001);
           </script>";	
		 }  	
      }
     }
   }

		
		       /*mostra admin----------------------------------------------------------*/
		
		function mostraAmin(){
	
			   include("../modelo/Conexion.php");
			   $base=new Conexion();
	
	/*visualiza los campos de dos tablas*/
	$registros=$base->connect()->query("select id, password, rol_id, nombre, apellido, correo, direccion, username, password, rol_id from datos_usuario inner join usuarios on datos_usuario.nombre=usuarios.username")->fetchAll(PDO::FETCH_OBJ);//juntado dos tablas en select
	
			return( $registros);	

		}
		
		
		
		
		/*insertar admin---------------------------------------------------------------------------------------*/
		
		function insertarAdmin(){
			
				
	if(isset($_POST['cr'])){
				  
	  $nombre=$_POST["Nom"];
	  $apellido=$_POST["Ape"];
	  $correo=$_POST["Cor"];
	  $direccion=$_POST["Dir"];
	  $password=$_POST["Pas"];
	  $rol=$_POST["Rol"];
	  
			
			$base=new Conexion();
		
		/*duplicaciones*/
			
         $sql = "SELECT COUNT(*) FROM datos_usuario WHERE nombre ='$nombre'";
		
                  if ($resultado = $base->connect()-> query($sql)) {

                        /* Comprobar el número de filas que coinciden con la sentencia SELECT */
                       if ($resultado->fetchColumn() > 0) {

                           /* Ejecutar la sentencia SELECT para mostrar el nombre duplicado*/
                          $sql = "SELECT nombre FROM datos_usuario WHERE nombre = '$nombre'";
                          foreach ($base->connect()->query($sql) as $fila) {
                            $duplicado=$nombre;
                          }
	  
	                      echo '<script language="javascript">alert("Usuario duplicado: '.$duplicado.' ya esta en uso.");</script>';
	                       echo "<script>
                            setTimeout(function() {
                              location.href = '../vista/admin.php';
                             }, 0000);
                            </script>";
                           }
                           /* No coincide ningua fila inserta */
                   else {
 	
			
               $sql2="insert into datos_usuario (nombre, apellido, correo, direccion)values(:nom, :ape, :cor, :dir)";
			   
              $resultado=$base->connect()->prepare($sql2);
	           $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido,":cor"=>$correo,":dir"=>$direccion));
	
		
                                    	/*----------------segunda tabla-----------------------------*/
	 
	                     $username=$_POST['Nom'];
	
		                $query=$base->connect()->prepare("insert into usuarios (username, password, rol_id) values (:username, :password, :rol_id)");
			   
                        $query->execute(array(":username"=>$username, ":password"=>$password, ":rol_id"=>$rol));
		                header('location: admin.php');
			  
		           }
                 }
	  
            	}
	        }
		
		
		
			  
                       /**--------------------index del foro----------------------------------*/
		
		        function mostrarForo(){
		              	session_start();
			
			            include("../modelo/Conexion.php");
			             $db=new Conexion();	
	
	                   $result = $db->connect()->prepare("SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha_inicio DESC"); 
                       $result->execute();
                       $resultado = $result->fetchAll(PDO::FETCH_OBJ);
				
		                return($resultado);
	                 	}


                                             /*insertar foro-------------------------------------*/
		
                 function insertarForo(){
                 session_start();
	              include("../modelo/Conexion.php");
         
                  $db=new Conexion();

			       $autor=$_SESSION['usuario'];/*cogemos el nombre del usuario logeado*/

           
			        $titulo=$_POST['titulo'];
			        $contenido=$_POST['contenido'];
		        	$respuestas=$_POST['respuestas'];
		        	$identificador=$_POST['identificador'];
			        $fecha_inicio = date("d-m-y");
					

			               echo "identificador:";
			               echo $identificador;
					
			                    //Grabamos el mensaje en la base de datos.		
		$query=$db->connect()->prepare("insert into foro (autor, titulo, contenido, identificador, fecha_inicio) values (:autor, :titulo, :contenido,:identificador,:fecha_inicio)");			
        $query->execute(array(":autor"=>$autor, ":titulo"=>$titulo,":contenido"=>$contenido,"identificador"=>$identificador,"fecha_inicio"=>$fecha_inicio));


			echo "identificador:";
			echo $identificador;
			
	
        foreach ($resultado as $dato);

			/* si es un mensaje en respuesta a otro actualizamos los datos */
			if ($identificador != 0)
			{
				$query2 = "UPDATE foro SET respuestas=respuestas+1 WHERE ID='$identificador'";
				$result2 = $db->connect()->prepare($query2); 
				$result2->execute();
        
				
				echo $query2;
				header("Location: ../vista/foro.php?id=$identificador");/*le pasamos por Get el parametro*/
				exit();
			}
	
			header("Location: ../vista/foro_index.php");
}
		
		
		
		
	  }/*fin de la clase*/
?>