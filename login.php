<?php
    require("./vistas/layouts/special-headerL.php");
?>
                <div id="info-square">
                    <h1>Ya eres parte del club?</h1>
                    <p>Ingresa los datos de tu cuenta para acceder a la comunidad y obtener las prendas del momento.</p>
                </div>
                <div id="form-square">
                    <div class="container bgLogInForm" id="login-form">
                        <img src="./vistas/images/logo.png" width="0" height="0" id="logo-login">
                        <form>
                          <div class="form-inline">
                              <i class="fas fa-user"></i>
                            <input type="text" class="form-control" placeholder="Usuario">
                          </div>
                          <div class="form-inline">
                            <i class="fas fa-key"></i>
                            <input type="password" class="form-control" placeholder="Contraseña">
                          </div>
                          <button type="submit" class="btn btn-principal">Ingresar</button>
                        </form>
                    </div>
                </div>
<?php
  require("./vistas/layouts/special-footer.php");
?>