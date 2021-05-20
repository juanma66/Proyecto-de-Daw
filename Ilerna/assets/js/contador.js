
/*FUNCION ANÓNIMA: Se activa cuando se produce scroll en la página y si el Scroll Vertical
es superior a 1840 y menor de 1900 que es donde se posiciona el div, llama a la función que activa el contador
y sobreescribe el elemento con innerHTML*/
window.addEventListener("scroll",function() {
					if (this.scrollY > 1840 && this.scrollY < 1900) {
						
						animateValue("cifras_prof", 0, 9, 3000);
						animateValue("cifras_act", 0, 9, 4000);
						animateValue("cifras_exp", 0, 12, 5000);
					}
				}),false;
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}


//intervalo tiempo cambio img slide, 5 segundos, se llama a la función "avanzaSlide()"
setInterval('avanzaSlide()',5000);

//array con las clases para las diferentes imagenes
var arrayImagenes = new Array(".img1",".img2",".img3");

//variable que nos permitirá saber qué imagen se está mostrando
var contador = 0;

//hace un efecto fadeIn para mostrar una imagen
function mostrar(img){
    $(img).ready(function(){
        $(arrayImagenes[contador]).fadeIn(1500);
    });
}

//hace un efecto fadeOut para ocultar una imagen
function ocultar(img){
    $(img).ready(function(){
        $(arrayImagenes[contador]).fadeOut(1500);
    });
}

//función principal
function avanzaSlide(){
    //se oculta la imagen actual
    ocultar(arrayImagenes[contador]);
    //aumentamos el contador en una unidad
    contador = (contador + 1) % 3;
    //mostramos la nueva imagen
    mostrar(arrayImagenes[contador]);
}