
<?php require('../templates/metaHeader.php'); ?>

<div class="container m-5 ">
    
    <div class="row">
        <div class="col-6">
            <h1><b>Login</b></h1>

            <p>
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Qui pariatur libero voluptate tempore repellat nulla ducimus quam, 
             maiores vel unde alias quasi sapiente blanditiis labore perferendis. 
             Quis doloremque nam culpa?
             </p>
        </div>

        <div class="col-6">
        
            <form action="" method="post">

            <div class="form-group">
              <label for="">Email</label>
              <input type="text" required  class="form-control" placeholder="Usuario" >
              <small id="helpId" class="text-muted"></small>
            </div>

            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" required class="form-control" placeholder="Contraseña" >
              <small id="helpId" class="text-muted"></small>
            </div>

            <button type="submit"  class="btn btn-primary btn-lg btn-block btn-outline"> Entrar </button>



            
            </form>

        </>

    </div>


</div>


<?php require('../templates/footerBottom.php'); ?>