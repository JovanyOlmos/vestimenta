<?php
  session_start();
  require("./vistas/layouts/main-header.php");
  include("./vistas/controllers/connection.php");
  include("./vistas/modules/shopping-items.php");
  $temp=1; $cat=NULL;
?>
            <div id="carousel-fixed">
                <div class="raw">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <div class="d-block w-100" id="slide1"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h4>First slide label</h4>
                              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                              <a href="" class="btn btn-exito">Lo quiero!!</a>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="d-block w-100" id="slide2"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h4>Second slide label</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <a href="" class="btn btn-exito">Lo quiero!!</a>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="d-block w-100" id="slide3"></div>
                            <div class="carousel-caption d-none d-md-block">
                              <h4>Third slide label</h4>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                              <a href="" class="btn btn-exito">Lo quiero!!</a>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
            <div id="content-with-carousel">
                <div id="shopping-block">
                  <div id="block-title">
                    <h2>Encuentra lo que necesitas</h2>
                  </div>
                  <div id="block-products">
                      <?php ShowItems($temp, $cat); ?>
                  </div>
                </div>
                <div id="content-block">
                  <div id="block-title">
                    <h2>Tendencias 2020</h2>
                  </div>
                  <div id="block-body-info">
                    <h3>Diseños espectaculares con una variedad para todos los gustos</h3>
                    <div>
                      <h5>Consulta nuestro catalogo para la nueva temporada de Verano!!</h5>
                      <p>- 26 de Abril <i class="far fa-clock"></i></p>
                    </div>
                  </div>
                </div>
                <div id="content-block">
                  <div id="block-newsletter">
                    <h3>Unete al selecto club</h3>
                    <p>Unete para obtener ofertas y descuentos exclusivos sobre la ultima moda</p>
                    <form class="form-inline">
                      <i class="far fa-envelope"></i>
                      <input type="email" class="form-control" placeholder="correo eléctronico">
                      <input type="submit" class="btn btn-principal" value="Suscribirse">
                    </form>
                  </div>
                </div>
<?php
  require("./vistas/layouts/main-footer.php");  
?>