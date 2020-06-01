
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
	$('#price-range').on('input', function(){
		$('#mi-rango').html(this.value);
	});
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
	$(document).on("click", "button.add-it", function() {
		$('.my-modal').css({'display':'block'});
		let element=$(this)[0].parentElement.parentElement.parentElement;
		let prenda_info=$(element).attr('attridItem');
		$.ajax({
			url: './vistas/modules/shopping-module.php',
			type: 'POST',
			data: {prenda_info},
			success: function(response) {
				let info = JSON.parse(response);
				let content = '';
				info.forEach(data => {
					content += `<h2>${data.nombre}</h2>
								<img src="${data.imagen1}">
								<div id="descripciones">
								<p>${data.descripcion_prenda}</p>
								<p>${data.descripcion_tallas}</p>
								</div>
								<form attrId="${data.id}">
								<label>Escoja el numero de prendas</label>
								<input type="number" class="amount form-control" value="1"></input>
								<select class="size form-control form-control-sm">
									<option value="0">Seleccione talla</option>
									<option value="xs">XS</option>
									<option value="s">S</option>
									<option value="m">M</option>
									<option value="l">L</option>
									<option value="xl">XL</option>
									<option value="xxl">XXL</option>
									<option value="xxxl">XXXL</option>
								</select>
								<div id="botones-modal">
									<a class="btn btn-secundario" id="cancel-modal" href="#">Cancelar</a>
									<input type="submit" class="add-to-cart btn btn-principal" value="Agregar al carrito"></input>
								</div>
								</form>`;
				});
				$('.my-body-modal').html(content);
			}
		})
	});

	$(document).on("click", ".add-to-cart", function(e) {
		e.preventDefault();
		$('.my-modal').css({'display':'none'});
		let elementId=$(this)[0].parentElement.parentElement;
		let getAmount=$(elementId).children('.amount').val();
		let getSize=$(elementId).children('.size').val();
		console.log(getAmount);
		console.log(getSize);
		let getElementId=$(elementId).attr('attrId');
		console.log(getElementId);
		$.ajax({
			url: './vistas/modules/cart-modules.php',
			type: 'POST',
			data: {getElementId, getAmount, getSize},
			success: function(response) {
				console.log(response);
			}
		})
	});

	$(document).on("click", "#cancel-modal", function(e) {
		$('.my-modal').css({'display':'none'});
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
		let xs, s, m, l, xl, xxl, xxxl;
		if($('#chck-xs').prop('checked')) { xs=true } else { xs=null }
		if($('#chck-s').prop('checked')) { s=true } else { s=null }
		if($('#chck-m').prop('checked')) { m=true } else { m=null }
		if($('#chck-l').prop('checked')) { l=true } else { l=null }
		if($('#chck-xl').prop('checked')) { xl=true } else { xl=null }
		if($('#chck-xxl').prop('checked')) { xxl=true } else { xxl=null }
		if($('#chck-xxxl').prop('checked')) { xxxl=true } else { xxxl=null }
		let prenda=$('#cmb-prendas').val();
		let category=$('#cmb-categoria').val();
		let cortes2send=[];
		let telas2send=[];
		for (let index = 1; index <= contador_cortes; index++) {
			if($('#chck-corte-'+index).prop('checked'))
			{
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
			data: {xs, s, m, l, xl, xxl, xxxl, prenda, cortes2send, telas2send, precio, category},
			success: function(response) {
				let articulos = JSON.parse(response);
				let item_cards='';
				//console.log(response);
				articulos.forEach(articulo => {
					item_cards += `<div id="item-card" attrIdItem="${articulo.id}">
									<img src="${articulo.imagen1}" width="50" height="50" id="item-image">
									<h5>${articulo.nombre}</h5>
									<p>${articulo.descripcion_prenda}</p>
									<div id="item-footer">
										<h6>${articulo.precio}</h6>
										<div class="buttons-item-footer">
										<a href=""><i class="far fa-heart"></i></a>
										<button class="add-it"><i class="fas fa-cart-plus"></i></button>
										</div>
									</div>
								</div>`;
				});
				$('#block-products').html(item_cards);
				$('#btn-filtros').removeClass('fas fa-arrow-up').addClass('fas fa-arrow-down');
				$('#content-shopping').css({'top':'-41vh'});
			}
		})
	});

	/* Carrito de compras */
	$(document).on('input', 'input.number_box', function(){
		let elementId=$(this)[0].parentElement.parentElement;
		let cantidad=$(elementId).children('.number_box_container').children('.number_box').val();
		elementId=$(this)[0].parentElement.parentElement;
		let precio=$(elementId).children('.el-precio').attr('price');
		let subtotal=cantidad*precio;
		elementId=$(this)[0].parentElement.parentElement;
		$(elementId).children('.contenedor_precio').children('.subtotal').html(subtotal);
		let total=0;
		$('.subtotal').each(function(){
			total+=parseFloat($(this).html());
		});
		$('.total').html(total);
	});

	$('.comprar').on('click', function(e){
		e.preventDefault();
		console.log('adios');
	});

	$(document).on('click', '.delete-item', function(){
		let elementId=$(this)[0].parentElement;
		let id=$(elementId).children('.delete-item').attr('idItem');
		console.log(id);
		$.ajax({
			url: './vistas/modules/cart-modules.php',
			type: 'POST',
			data: {id},
			success: function(response) {
				let articulos=JSON.parse(response);
				let articulos_carrito = `
				<tr>
				<th> </th>
				<th>Producto</th>
				<th>Talla</th>
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Subtotal</th>
				</tr>`;
				let total=0;
				articulos.forEach(articulo => {
					let subtotal = articulo.cantidad*articulo.precio;
					articulos_carrito+=`
					<tr>
					<td class="delete-item" idItem="${articulo.id}"><a id="btn-delete" href="#"><i class="fas fa-times"></i></a></td>';
					<td><img id="img-product-cart" src="${articulo.imagen}">${articulo.nombre}</td>
					<td class="el-precio" price="${articulo.precio}">$${articulo.precio}</td>
					<td class="number_box_container"><input id="number-box" min="1" class="number_box form-control" type="number" value="${articulo.cantidad}"></input></td>';
					<td>${articulo.talla}</td>
					<td class="contenedor_precio">$<span class="subtotal">${subtotal}</span></td>
					</tr>`;
					total+=subtotal;
				});
				articulos_carrito+=`
				<tr>
                <td id="last-row"></td>
                <td id="last-row"></td>
                <td id="last-row"></td>
        	    <td id="last-row"></td>
                <td id="last-row">Total</td>
                <td id="last-row">$<span class="total">${total}</span></td>
                </tr>`
				$('.my-cart-container').html(articulos_carrito);
			}
		})
	});

	$(document).on('click', '.add-favorite', function(e){
		e.preventDefault();
		let elementId=$(this)[0].parentElement.parentElement.parentElement;
		let favoriteId=$(this)[0].parentElement;
		let idPrenda=$(elementId).attr('attriditem');
		if($(favoriteId).children('.add-favorite').children('.corazon').attr('class')=="corazon fas fa-heart")
		{
			let idPrenda2remove=idPrenda;
			let prendasAImprimir=``;
			$.ajax({
				url: './vistas/modules/favorites-module.php',
				type: 'POST',
				data: {idPrenda2remove},
				success: function(response) {
					let articulos=JSON.parse(response);
					articulos.forEach(articulo => {
						prendasAImprimir+=`<div id="item-card" attrIdItem="${articulo.id}">
							<img src="${articulo.imagen}" width="50" height="50" id="item-image">
							<h5 id="nombre-producto2send">${articulo.nombre}</h5>
							<p>${articulo.descripcion_prenda}</p>
							<div id="item-footer">
								<h6>$${articulo.precio}</h6>
								<div class="buttons-item-footer">
								<a class="add-favorite" href="#"><i class="corazon fas fa-heart"></i></a>
								<button class="add-it"><i class="fas fa-cart-plus"></i></button>
								</div>
							</div>
						</div>`;
					})
					$('#block-products').html(prendasAImprimir);
				}
			})
		}
		else
		{
			$.ajax({
				url: './vistas/modules/favorites-module.php',
				type: 'POST',
				data: {idPrenda},
				success: function(response) {
					alert(response);
				}
			})
		}
	});

	/* Otras funciones */
	$('.session-close').on('click', function(){
		let close=true;
		$.ajax({
			url: './vistas/modules/helpers-modules.php',
			type: 'POST',
			data: {close},
			success: function(response) {
				if(response)
				{
					alert('Vuelva pronto!');
				}
			}
		})
	});

	$('.cat-mujer').on('click', function(e){
		e.preventDefault();
		let elementId=$('.cat-mujer')[0].parentElement;
		$(elementId).submit();
	});
	$('.cat-hombre').on('click', function(e){
		e.preventDefault();
		let elementId=$('.cat-hombre')[0].parentElement;
		$(elementId).submit();
	});
	$('.cat-nino').on('click', function(e){
		e.preventDefault();
		let elementId=$('.cat-nino')[0].parentElement;
		$(elementId).submit();
	});
	$('.cat-nina').on('click', function(e){
		e.preventDefault();
		let elementId=$('.cat-nina')[0].parentElement;
		$(elementId).submit();
	});
	$('.cat-bebe').on('click', function(e){
		e.preventDefault();
		let elementId=$('.cat-bebe')[0].parentElement;
		$(elementId).submit();
	});
	$('.temporada').on('click', function(e){
		e.preventDefault();
		let elementId=$('.temporada')[0].parentElement;
		$(elementId).submit();
	});
});