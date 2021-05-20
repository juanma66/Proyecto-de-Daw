function compruebaAceptaCookies() {
  if(localStorage.aceptaCookies == 'true'){
    cajacookies.style.display = 'none';
  }
}

/* aquí guardamos la variable de que se ha
aceptado el uso de cookies así no mostraremos
el mensaje de nuevo */
function aceptarCookies() {
  localStorage.aceptaCookies = 'true';
  cajacookies.style.display = 'none';
}
 /* ésto se ejecuta cuando la web está cargada, si no se usa el metodo onLoad no funciona */
 onload=function carga(){
	
$(document).ready(function () {
  compruebaAceptaCookies();
});

 }

