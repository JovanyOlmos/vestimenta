<?php
    require("./vistas/layouts/main-header.php");
    include("./vistas/controllers/connection.php");
    include("./vistas/modules/shopping-items.php");
    if(isset($_GET["temporada"])){ $temporada=$_GET["temporada"]; } else { $temporada=NULL; }
    if(isset($_GET["categoria"])){ $categoria=$_GET["categoria"]; } else { $categoria=NULL; }
?>
    <div id="content-shopping">
        <div id="shopping-block">
            <div id="shopping-filters">
                <h2>Buscalo a tu manera!</h2>
                <form action="" method="post">
                    <div class="cut-section">
                        <select name="" id="cmb-categoria" class="form-control form-control-sm">
                            <option value="0">Seleccione Categoria</option>
                            <option value="1">Mujer</option>
                            <option value="2">Hombre</option>
                            <option value="3">Niño</option>
                            <option value="4">Niña</option>
                            <option value="5">Bebé</option>
                            <option value="6">Juvenil</option>
                        </select>
                        <select name="prenda" id="cmb-prendas" class="form-control form-control-sm">
                            <option value="0">Seleccione Prenda</option>
                        </select>
                        <p>Corte</p>
                        <div id="checkbox-corte">
                            Seleccione la prenda para ver cortes
                        </div>
                    </div>
                    <div class="size-section">
                        <p>Tallas</p>
                        <label class="check-group">XS
                            <input id="chck-xs" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">S
                            <input id="chck-s" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">M
                            <input id="chck-m" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">L
                            <input id="chck-l" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">XL
                            <input id="chck-xl" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">XXL
                            <input id="chck-xxl" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">XXXL
                            <input id="chck-xxxl" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="cloth-section">
                        <p>Material</p>
                        <div id="checkbox-tela">

                        </div>
                    </div>
                    <div class="price-section">
                        <p>Seleccione un precio maximo</p>
                        <p>50$ - <span id="mi-rango">500</span>$</p>
                        <div class="slidecontainer">
                            <input type="range" min="50" max="1000" value="500" class="slider" id="price-range">
                        </div>
                        <input type="submit" id="filtrar-contenido" class="btn btn-principal" value="Filtrar"></input>
                    </div>
                </form>
            </div>
            <div id="show-filters">
                <span class="fas fa-arrow-down" id="btn-filtros"></span>
            </div>'
            <div id="block-title">
                <h2><?php if($temporada!=NULL) { echo "Lo mejor para esta temporada de ".$temporada; }
                    if($categoria!=NULL) { echo "La mejor ropa para ".$categoria; } ?></h2>
            </div>
            <div id="block-products">
                <?php ShowItems($temporada, $categoria); ?>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item activo"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
<?php
    require("./vistas/layouts/main-footer.php");
?>