

	$(document).ready(function(){
		$('#mensaje').click(function(){

		
			if($('#userx').val()==""){
				alert("Debes agregar el usuario");
				return false;
			}
			else if($('#apex').val()==""){
				alert("Debes agregar el apellido");
				return false;
			}
			else if($('#pass').val()==""){
				alert("Debes agregar el password");
				return false;
			}
			else if($('#corx').val()==""){
				alert("Debes agregar el correo");
				return false;
			}
			else if($('#dirx').val()==""){
				alert("Debes agregar el dirección");
				return false;
			}

//			cadena=
//					"usuario=" + $('#userx').val() + 
//					"&password=" + $('#pass').val()+ 
//					"&password=" + $('#apex').val()+ 
//					"&password=" + $('#corx').val()+ 
//					"&password=" + $('#dirx').val();
//
//					$.ajax({
//						type:"POST",
//						url:"../controlador/registro_controlador.php",
//						url:"../controlador/Control.php",
//						data:cadena,
//						success:function(r){
//							if(r==1){
//								$('#mensaje')[0].reset();
//								success("Agregado con exito");
//							}else{
//								error("Fallo al agregar");
//							}
//						}
//					});
		});
	});
	
