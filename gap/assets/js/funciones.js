//no link
$(document).ready(function(){
$("body div:last").remove();
});

//quitar gatito
 

$(document).ready(function() {
			  var menu = $(".menu2");
			  var contenedor = $("#menu-contenedor");
			  var cont_offset = contenedor.offset();
			  // Cada vez que se haga scroll en la página
			  // haremos un chequeo del estado del menú
			  // y lo vamos a alternar entre "fixed" y "static".
			
			  $(window).on("scroll", function() {
				 //alert($(window).scrollTop());
				if($(window).scrollTop() > cont_offset.top) {
				  menu.addClass("menu-fijo");
				} else {
				  menu.removeClass("menu-fijo");
				}
			  });
			});