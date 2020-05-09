$(document).ready(function(){

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
});