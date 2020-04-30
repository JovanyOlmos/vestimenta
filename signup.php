<?php
  require("./vistas/layouts/special-headerR.php");
?>
                <div id="info-square">
                    <h1>Bienvenido</h1>
                    <p>Llena los campos para obtener tu cuenta y ser parte de la comunidad de moda mas grande de Mexico</p>
                </div>
                <div id="form-square">
                    <div class="container bgLogInForm" id="login-form">
                        <img src="./vistas/images/logo.png" width="0" height="0" id="logo-register">
                        <form>
                            <div class="form-inline">
                                <i class="fas fa-user"></i>
                                <input type="text" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="form-inline">
                                <i class="fas fa-key"></i>
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-inline">
                                <i class="fas fa-key"></i>
                                <input type="password" class="form-control" placeholder="Confirma contraseña">
                            </div>
                          <button type="submit" class="btn btn-principal">Ingresar</button>
                        </form>
                    </div>
                </div>
<?php
  require("./vistas/layouts/special-footer.php");
?>