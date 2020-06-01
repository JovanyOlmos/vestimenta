<?php
    session_start();
    require("./vistas/layouts/main-header.php");
    include("./vistas/modules/shopping-items.php");
    include("./vistas/controllers/connection.php");
?>
    <div id="content-without-carousel">
        <div id="shopping-block">
            <div id="block-title">
                <h2>Tus favoritos!</h2>
            </div>
            <div id="block-products">
                <?php ShowFavorites($_SESSION["id"]); ?>
            </div>
        </div>

<?php
    require("./vistas/layouts/main-footer.php");
?>