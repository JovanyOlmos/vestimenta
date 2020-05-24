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

	//Javascript para ocultar y mostrar menu de filtros
	var contador_telas=0;
	$('#btn-filtros').click(function(){
		if($('#btn-filtros').attr('class')=='fas fa-arrow-up')
		{
			$('#btn-filtros').removeClass('fas fa-arrow-up').addClass('fas fa-arrow-down');
			$('#content-shopping').css({'top':'-41vh'});
		}
		else
		{
			let telas='telas';
			contador_telas=0;
			$.ajax({
				url: './vistas/modules/shopping-module.php',
				type: 'POST',
				data: {telas},
				success: function(response) {
					let telas = JSON.parse(response);
					let options='';
					telas.forEach(tela => {
						contador_telas++;
						//console.log(contador_telas);
						options += `<label class="check-group">${tela.tela}
										<input type="checkbox" id="chck-tela-${tela.id}" value="${tela.id}">
										<span class="checkmark"></span>
									</label>`;
					});
					$('#checkbox-tela').html(options);
				}
			})
			$('#btn-filtros').removeClass('fas fa-arrow-down').addClass('fas fa-arrow-up');
			$('#content-shopping').css({'top':'13vh'});
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

	//Funcionalidad filtros
	$('#cmb-categoria').change(function(e) {
		let categoria = this.value;
		$.ajax({
			url: './vistas/modules/shopping-module.php',
			type: 'POST',
			data: {categoria},
			success: function(response) {
				let prendas = JSON.parse(response);
				let options = '<option value="0">Seleccione Prenda</option>';
				prendas.forEach(prenda => {
					options += `<option value="${prenda.id}">${prenda.prenda}</option>`;
				});
				$('#cmb-prendas').html(options);
			}
		})
	});
	var contador_cortes=0;
	$('#cmb-prendas').change(function(e) {
		contador_cortes=0;
		let cortes = this.value;
		$.ajax({
			url: './vistas/modules/shopping-module.php',
			type: 'POST',
			data: {cortes},
			success: function(response) {
				let cortes = JSON.parse(response);
				let options='';
				cortes.forEach(corte => {
					contador_cortes++;
					options += `<label class="check-group">${corte.corte}
									<input type="checkbox" id="chck-corte-${corte.id}" value="${corte.id}">
									<span class="checkmark"></span>
								</label>`;
				});
				$('#checkbox-corte').html(options);
			}
		})
	});

	$('#filtrar-contenido').click(function(e){
		e.preventDefault();
		console.log(contador_telas);
		let xs, s, m, l, xl, xxl, xxxl;
		if($('#chck-xs').prop('checked')) { xs=true } else { xs=false }
		if($('#chck-s').prop('checked')) { s=true } else { s=false }
		if($('#chck-m').prop('checked')) { m=true } else { m=false }
		if($('#chck-l').prop('checked')) { l=true } else { l=false }
		if($('#chck-xl').prop('checked')) { xl=true } else { xl=false }
		if($('#chck-xxl').prop('checked')) { xxl=true } else { xxl=false }
		if($('#chck-xxxl').prop('checked')) { xxxl=true } else { xxxl=false }
		let prenda=$('#cmb-prendas').val();
		let cortes2send=[];
		let telas2send=[];
		for (let index = 1; index <= contador_cortes; index++) {
			if($('#chck-corte-'+index).prop('checked'))
			{
				console.log($('#chck-corte-'+index).val());
				cortes2send.push($('#chck-corte-'+index).val());
			}
		}
		for (let index = 1; index <= contador_telas; index++) {
			if($('#chck-tela-'+index).prop('checked'))
			{
				console.log($('#chck-tela-'+index).val());
				telas2send.push($('#chck-tela-'+index).val());
			}
		}
		let precio=$('#price-range').val();
		$.ajax({
			url: './vistas/modules/shopping-module.php',
			type: 'POST',
			data: {xs, s, m, l, xl, xxl, xxxl, prenda, cortes2send, telas2send, precio},
			success: function(response) {
				//let cortes = JSON.parse(response);
				//let options='';
				console.log(response);
				//cortes.forEach(corte => {
					/*options += `<label class="check-group">${corte.corte}
									<input type="checkbox" value="${corte.id}">
									<span class="checkmark"></span>
								</label>`;*/
				//});
				//$('#checkbox-corte').html(options);
			}
		})
	});
});