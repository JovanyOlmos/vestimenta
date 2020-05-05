<?php
    require('./vistas/layouts/main-header.php');
?>
    <div id="content-without-carousel">
        <div id="content-block">
            <div id="block-contact">
                <h2>Envianos un mensaje</h2>
                <p>Ponte en contacto con nosotros para responder cualquier pregunta relacionada con nuestros 
                    productos. Te responderemos a la brevedad.
                </p>
                <form>
                    <div class="form-inline">
                        <i class="far fa-user"></i>
                        <input type="text" class="form-control form-inline" placeholder="nombre">
                    </div>
                    <div class="form-inline">
                        <i class="far fa-envelope"></i>
                        <input type="email" class="form-control form-inline" placeholder="correo eléctronico">
                    </div>
                    <div class="form-inline">
                        <i class="fas fa-phone"></i>
                        <input type="tel" class="form-control form-inline" placeholder="teléfono">
                    </div>
                    <div class="form-inline">
                        <i class="fas fa-envelope-open-text"></i>
                        <textarea class="form-control form-inline" placeholder="mensaje"></textarea>
                    </div>
                  <input type="submit" class="btn btn-principal" value="Enviar">
                </form>
            </div>
        </div>
<?php
    require('./vistas/layouts/main-footer.php');
?>