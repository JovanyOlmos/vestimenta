<?php
    require("./vistas/layouts/main-header.php")
?>
    <div id="content-without-carousel">
        <div id="cart-content">
            <form>
                <table>
                    <tr>
                        <th> </th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    <tr>
                        <td><a id="btn-delete" href="#"><i class="fas fa-times"></i></a></td>
                        <td><img id="img-product-cart" src="./vistas/images/swetter.jpg">Saint Lauren</td>
                        <td>$250.99</td>
                        <td><input id="number-box" class="form-control" type="number" value="1"></input></td>
                        <td>$250.99</td>
                    </tr>
                    <tr>
                        <td><a id="btn-delete" href="#"><i class="fas fa-times"></i></a></td>
                        <td><img id="img-product-cart" src="./vistas/images/shirt.jpg">Gucci</td>
                        <td>$345.39</td>
                        <td><input id="number-box" class="form-control" type="number" value="2"></input></td>
                        <td>$690.78</td>
                    </tr>
                    <tr>
                        <td id="last-row"></td>
                        <td id="last-row"></td>
                        <td id="last-row"></td>
                        <td id="last-row">Total</td>
                        <td id="last-row">$941.77</td>
                    </tr>
                </table>
                <div id="cart-options">
                    <input type="submit" class="btn btn-exito" value="Seguir comprando"></input>
                    <input type="submit" class="btn btn-principal" value="Realizar compra"></input>
                </div>
            </form>
        </div>
<?php
    require("./vistas/layouts/main-footer.php");
?>