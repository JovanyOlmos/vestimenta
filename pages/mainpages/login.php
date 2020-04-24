
<?php require('../templates/metaHeader.php'); ?>

<div class="container m-5">
    
    <div class="row bgLogInCard">
        <div class="col-6 p-5">
            <h1><b>Login</b></h1>

            <p>
             Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Qui pariatur libero voluptate tempore repellat nulla ducimus quam, 
             maiores vel unde alias quasi sapiente blanditiis labore perferendis. 
             Quis doloremque nam culpa?
             </p>
        </div>

        <div class="col-6 bgLogInForm p-5">
        
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

            <button type="submit"  class="btn btn-outline-primary btn-block"> Entrar </button>



            
            </form>

        </>

    </div>


</div>


<?php require('../templates/metaFooter.php'); ?>