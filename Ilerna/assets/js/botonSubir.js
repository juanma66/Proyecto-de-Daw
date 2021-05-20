
$(document).ready(function(){
 
	$('.subir').click(function(){
		$('body, html').animate({
			scrollTop: '0px'/*punto desde el que te sube*/
		}, 500);/*velocidad de subida*/
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){/*si es mayor que 0*/
			$('.subir').slideDown(300);
		} else {
			$('.subir').slideUp(300);
		}
	});
 
});