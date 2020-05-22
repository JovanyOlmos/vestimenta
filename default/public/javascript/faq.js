$(document).ready(function(){
	//Javascript para la pagina de FAQ
	$('#s1').click(function(){
		$('.seccion1').css({'display':'block'});
		$('.seccion2').css({'display':'none'});
		$('.seccion3').css({'display':'none'});
		$('.seccion4').css({'display':'none'});
		$('.seccion5').css({'display':'none'});
		$('.seccion6').css({'display':'none'});
	});

	$('#s2').click(function(){
		$('.seccion1').css({'display':'none'});
		$('.seccion2').css({'display':'block'});
		$('.seccion3').css({'display':'none'});
		$('.seccion4').css({'display':'none'});
		$('.seccion5').css({'display':'none'});
		$('.seccion6').css({'display':'none'});
	});

	$('#s3').click(function(){
		$('.seccion1').css({'display':'none'});
		$('.seccion2').css({'display':'none'});
		$('.seccion3').css({'display':'block'});
		$('.seccion4').css({'display':'none'});
		$('.seccion5').css({'display':'none'});
		$('.seccion6').css({'display':'none'});
	});

	$('#s4').click(function(){
		$('.seccion1').css({'display':'none'});
		$('.seccion2').css({'display':'none'});
		$('.seccion3').css({'display':'none'});
		$('.seccion4').css({'display':'block'});
		$('.seccion5').css({'display':'none'});
		$('.seccion6').css({'display':'none'});
	});

	$('#s5').click(function(){
		$('.seccion1').css({'display':'none'});
		$('.seccion2').css({'display':'none'});
		$('.seccion3').css({'display':'none'});
		$('.seccion4').css({'display':'none'});
		$('.seccion5').css({'display':'block'});
		$('.seccion6').css({'display':'none'});
	});

	$('#s6').click(function(){
		$('.seccion1').css({'display':'none'});
		$('.seccion2').css({'display':'none'});
		$('.seccion3').css({'display':'none'});
		$('.seccion4').css({'display':'none'});
		$('.seccion5').css({'display':'none'});
		$('.seccion6').css({'display':'block'});
	});
	//Fin de Javascript para la pagina de FAQ

	//Javascript para obtener el valor de un slider
	document.getElementById('price-range').oninput = function() {
		document.getElementById('mi-rango').innerHTML=this.value;
	}
	//Fin Javascript de slide

	//Javascript para ocultar menu de filtros
	$('#btn-filtros').click(function(){
		if($('#btn-filtros').attr('class')=='fas fa-arrow-up')
		{
			$('#btn-filtros').removeClass('fas fa-arrow-up').addClass('fas fa-arrow-down');
			$('#content-without-carousel').css({'top':'-41vh'});
		}
		else
		{
			$('#btn-filtros').removeClass('fas fa-arrow-down').addClass('fas fa-arrow-up');
			$('#content-without-carousel').css({'top':'13vh'});
		}
	});

	//Modal para comprar
	$('#add-it').click(function(e) {
		e.preventDefault();
		$('.my-modal').css({'display':'block'});
	});

	$('#cancel-modal').click(function(e) {
		e.preventDefault();
		$('.my-modal').css({'display':'none'})
	});
});