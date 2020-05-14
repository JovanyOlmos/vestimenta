<?php
    require("./vistas/layouts/main-header.php");
    include("./vistas/controllers/connection.php");
    include("./vistas/modules/shopping-items.php");
    if(isset($_GET["temporada"])){ $temporada=$_GET["temporada"]; } else { $temporada=NULL; }
    if(isset($_GET["categoria"])){ $categoria=$_GET["categoria"]; } else { $categoria=NULL; }
    if(isset($_POST["xs"])){ $xs=$_POST["xs"]; } else { $xs=NULL; }
    if(isset($_POST["s"])){ $s=$_POST["s"]; } else { $s=NULL; }
    if(isset($_POST["m"])){ $m=$_POST["m"]; } else { $m=NULL; }
    if(isset($_POST["l"])){ $l=$_POST["l"]; } else { $l=NULL; }
    if(isset($_POST["xl"])){ $xl=$_POST["xl"]; } else { $xl=NULL; }
    if(isset($_POST["xxl"])){ $xll=$_POST["xxl"]; } else { $xxl=NULL; }
    if(isset($_POST["xxxl"])){ $xll=$_POST["xxxl"]; } else { $xxxl=NULL; }
?>
    <div id="content-without-carousel">
        <div id="shopping-block">
            <div id="shopping-filters">
                <h2>Encuentra lo que deseas</h2>
                <form action="" method="post">
                    <div class="size-section">
                        <p>Tallas</p>
                        <label class="check-group">XS
                            <input name="xs" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">S
                            <input name="s" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">M
                            <input name="m" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">L
                            <input name="l" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">XL
                            <input name="xl" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">XXL
                            <input name="xxl" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">XXXL
                            <input name="xxxl" type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="cloth-section">
                        <p>Material</p>
                        <?php GetClothForFilters(); ?>
                    </div>
                    <div class="cut-section">
                        <select name="prenda" class="form-control form-control-sm">
                            <option value="0">Seleccione prenda</option>
                            <?php GetKindForFilters(); ?>
                        </select>
                        <p>Corte</p>
                        <label class="check-group">Ajustado/Skinny
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">Recto/Normal
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="check-group">Slim/Semi-ajustado
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="price-section">
                        <p>Seleccione un precio maximo</p>
                        <p>50$ - <span id="mi-rango">500</span>$</p>
                        <div class="slidecontainer">
                            <input type="range" min="50" max="1000" value="500" class="slider" id="price-range">
                        </div>
                        <input type="submit" class="btn btn-principal" value="Filtrar"></input>
                    </div>
                </form>
            </div>
            <div id="show-filters">
                <span class="fas fa-arrow-up" id="btn-filtros"></span>
            </div>'
            <div id="block-title">
                <h2></h2>
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