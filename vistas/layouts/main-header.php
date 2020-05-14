<!DOCTYPE html> 
<html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="Vestimenta" content="Tienda de ropa en linea">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <script src="./vistas/js/jquery-3.4.1.js"></script>
	          <script src="./vistas/js/faq.js"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link href="./vistas/css/style.scss" rel="stylesheet">
            <link href="./vistas/fonts/css/all.css" rel="stylesheet">
            <meta http-equiv="Expires" content="0">
            <meta http-equiv="Last-Modified" content="0">
            <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
            <meta http-equiv="Pragma" content="no-cache">
        </head>
        <body>
            <header id="normal-header">
                <nav class="navbar navbar-expand-lg" id="header">
                    <a class="navbar-brand" href="#">
                        <img src="./vistas/images/logo.png" width="60" height="50" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="index.php">Inicio</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Temporada</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Descuentos</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Categorias
                            </a>
                            <div  id="nav-dropmenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Mujer</a>
                              <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Hombre</a>
                              <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Niño/a</a>
                              <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Bebé</a>
                            </div>
                          </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <?php
                              if(!isset($_SESSION['nickname']))
                              {
                                echo '<li class="nav-item active">
                                  <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                              </li>
                              <li class="nav-item active">
                                  <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                              </li>
                              <li class="nav-item active">
                                  <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                              </li>
                              <li class="nav-item active">
                                  <h3 class="separador-nav">|</h3>
                              </li>
                                <li class="nav-item active">
                                    <a href="signup.php" class="nav-link">Registrate</a>
                                </li>
                                <li class="nav-item active">
                                    <h3 class="separador-nav">|</h3>
                                </li>
                                <li class="nav-item active">
                                    <a href="login.php" class="nav-link">Ingresa</a>
                                </li>';
                              }
                              else
                              {
                                echo '<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Hola '.$_SESSION['nickname'].' <i class="fas fa-user-circle"></i>
                                </a>
                                <div  id="nav-dropmenu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Mi Perfil</a>
                                  <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Mis Deseos</a>
                                  <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Mi Carrito</a>
                                  <a class="dropdown-item nav-link" id="item-dropmenu" href="#">Cerrar Sesion</a>
                                </div>
                              </li>';
                              }
                            ?>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="my-modal">
                <div class="my-body-modal">
                  <h2>Swetter</h2>
                  <img src="./vistas/images/swetter.jpg">
                  <div id="descripciones">
                    <p>Descripcion de la ropa</p>
                    <p>Descripcion de tallas</p>
                  </div>
                  <form>
                    <label>Escoja el numero de prendas</label>
                    <input type="number" class="form-control" value="1"></input>
                    <select class="form-control form-control-sm">
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
                      <input type="submit" class="btn btn-principal" value="Agregar al carrito"></input>
                    </div>
                  </form>
                </div>
            </div>