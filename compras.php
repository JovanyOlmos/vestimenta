<?php require("./vistas/layouts/simple-header.php");?>

<div class="pos-f-t">



    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white">Collapsed content</h4>
            <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">

        <a class="navbar-brand" href="/vestimenta">
            <img src="./vistas/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Vestimenta
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
            aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline ">
            <input class="form-control mr-sm-2" type="search" 
            placeholder="Buscar un producto" >
            <button type="button" class="btn   btn-outline-success">
                <i class="fa fa-user" aria-hidden="true"></i>    
                Acceder
            </button>
        </form>


    </nav>
</div>

    <div id="shopping-block">

        <div class="row p-5">

            <div class="col">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">
                    <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                    Ofertas
                </button>
            </div>

            <div class="col">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">
                    <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                    Novedades
                </button>
            </div>

            <div class="col">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">
                    <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                    Promociones
                </button>
            </div>

            <div class="col">
                <button type="button" class="btn btn-outline-primary btn-lg btn-block">
                    <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                    Rastrillo
                </button>
            </div>




        </div>

        <div class="row ml-5">
            <div class="col">
                <h2><b>Destacados</b> de la semana</h2>
                <hr>
            </div>
        </div>

        
        <div id="block-products">
            <div id="item-card">
                <div class="col m-3">
                    <span  class="badge badge-danger">Oferta</span>
                    <span class="badge badge-success">
                        Quedan <b>122</b> en oferta
                    </span>
                </div>
               
                <img src="./vistas/images/swetter.jpg" width="50" height="50" id="item-image">
                <h5>Saint Lauren</h5>
                <p>The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket
                    square and leather loafers.</p>
                <div id="item-footer">
                    <h6>$370.99</h6>
                    <div id="buttons-item-footer">
                        <a href=""><i class="far fa-heart"></i></a>
                        <a href=""><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div id="item-card">
            <div class="col m-3">
                    <span  class="badge badge-danger">Oferta</span>
                    <span class="badge badge-success">
                        Quedan <b>122</b> en oferta
                    </span>
                </div>
                <img src="./vistas/images/jacket.jpg" width="50" height="50" id="item-image">
                <h5>Saint Lauren</h5>
                <p>The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket
                    square and leather loafers.</p>
                <div id="item-footer">
                    <h6>$370.99</h6>
                    <div id="buttons-item-footer">
                        <a href=""><i class="far fa-heart"></i></a>
                        <a href=""><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
            <div id="item-card">
            <div class="col m-3">
                    <span  class="badge badge-danger">Oferta</span>
                    <span class="badge badge-success">
                        Quedan <b>122</b> en oferta
                    </span>
                </div>
                <img src="./vistas/images/shirt.jpg" width="50" height="50" id="item-image">
                <h5>Gucci</h5>
                <p>The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket
                    square and leather loafers.</p>
                <div id="item-footer">
                    <h6>$370.99</h6>
                    <div id="buttons-item-footer">
                        <a href=""><i class="far fa-heart"></i></a>
                        <a href=""><i class="fas fa-cart-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require("./vistas/layouts/simple.footer.php");?>