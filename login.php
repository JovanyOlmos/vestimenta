<?php
  session_start();
  if(isset($_SESSION['nickname']))
  {
    header("Location:index.php");
  }
  else
  {
    require("./vistas/layouts/special-headerL.php");
    include("./vistas/controllers/connection.php");
    $conection=Connect();
    if(!empty($_POST['usuario']) && !empty($_POST['password']))
    {
        $sql="SELECT * FROM usuarios WHERE nickname='".$_POST['usuario']."';";
        $query=mysqli_query($conection, $sql);
        if ($query->num_rows > 0) {
          while($row = $query->fetch_assoc()){
            if($row['password']==$_POST['password'])
            {
              $_SESSION['nickname']=$_POST['usuario'];
              $_SESSION['id']=$row['id'];
              mysqli_close($conection);
              header("Location:index.php");
            }
          }
        }
    }
  }
?>
                <div id="info-square">
                    <h1>Ya eres parte del club?</h1>
                    <p>Ingresa los datos de tu cuenta para acceder a la comunidad y obtener las prendas del momento.</p>
                </div>
                <div id="form-square">
                    <div class="container bgLogInForm" id="login-form">
                        <img src="./vistas/images/logo.png" width="0" height="0" id="logo-login">
                        <form action="login.php" method="post">
                          <div class="form-inline">
                              <i class="fas fa-user"></i>
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                          </div>
                          <div class="form-inline">
                            <i class="fas fa-key"></i>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                          </div>
                          <button type="submit" class="btn btn-principal">Ingresar</button>
                        </form>
                    </div>
                </div>
<?php
  require("./vistas/layouts/special-footer.php");
?>