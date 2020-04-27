
<?php require('../templates/metaHeader.php'); ?>

<div class="mt-5  container  middle">
    
   <div class="row bgLogInCard">
    <div class="col-6  bgLogIn">
      <h1>LogIn</h1>
      <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. 
       Officiis delectus iste culpa eaque, aperiam eum atque repellat cum, 
       facere enim veritatis dolor beatae aliquid ut eos odit aut quos temporibus?
      </p>
    </div>

    <div class="col-6 pl-0">
      <div class="container bgLogInForm">
        <form>
          <div class="form-group ">
            <label for="">Usuario</label>
            <input type="text" class="form-control" >
            <small id="helpId" class="text-muted">Help text</small>
          </div>

          <div class="form-group">
            <label for="">Contraseña</label>
            <input type="password" class="form-control" >
            <small id="helpId" class="text-muted">Help text</small>
          </div>
          
          <button type="submit" class="btn btn-outline-primary btn-block ">Action</button>
        </form>
      </div>
    </div>
   </div>
</div>


<?php require('../templates/metaFooter.php'); ?>