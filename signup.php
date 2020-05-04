<?php
  require("./vistas/layouts/special-headerR.php");
  include("./vistas/controllers/connection.php");
  $conection=Connect();
  if (!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['password_confirm']) && $_POST['password']==$_POST['password_confirm'])
  {
      $sql="INSERT INTO usuarios(nickname, password) VALUES('".$_POST['usuario']."','".$_POST['password']."');";
      $query=mysqli_query($conection, $sql);
      mysqli_close($conection);
      header("Location: login.php");
  }
?>

                <div id="info-square">
                    <h1>Bienvenido</h1>
                    <p>Llena los campos para obtener tu cuenta y ser parte de la comunidad de moda mas grande de Mexico</p>
                </div>
                <div id="form-square">
                    <div class="container bgLogInForm" id="login-form">
                        <img src="./vistas/images/logo.png" width="0" height="0" id="logo-register">
                        <form action="signup.php" method="post">
                            <div class="form-inline">
                                <i class="fas fa-user"></i>
                                <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="form-inline">
                                <i class="fas fa-key"></i>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-inline">
                                <i class="fas fa-key"></i>
                                <input type="password" name="password_confirm" class="form-control" placeholder="Confirma contraseña">
                            </div>
                          <button type="submit" class="btn btn-principal">Registrar</button>
                        </form>
                    </div>
                </div>
<?php
  require("./vistas/layouts/special-footer.php");
?>