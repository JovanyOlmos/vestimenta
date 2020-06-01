<?php
    session_start();
    require("./vistas/layouts/main-header.php")
?>
    <div id="content-without-carousel">
        <div id="cart-content">
            <form action="my-cart.php" method="post">
                <table class="my-cart-container">
                    <tr>
                        <th> </th>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php
                        $totalAcumulado=0;
                        foreach($_SESSION['Carrito'] as $articulo)
                        {
                            echo '<tr>';
                            $contador=1;
                            $auxiliar=0;
                            foreach($articulo as $dato)
                            {
                                if($contador==1)//Id
                                {
                                    echo '<td class="delete-item" idItem="'.$dato.'"><a id="btn-delete" href="#"><i class="fas fa-times"></i></a></td>';
                                }
                                if($contador==2)//Imagen
                                {
                                    echo '<td><img id="img-product-cart" src="'.$dato.'">';
                                }
                                if($contador==3)//Nombre
                                {
                                    echo ''.$dato.'</td>';
                                }
                                if($contador==5)//Precio
                                {
                                    echo '<td class="el-precio" price="'.$dato.'">$'.$dato.'</td>';
                                    $auxiliar=$dato;
                                }
                                if($contador==6)//Cantidad
                                {
                                    echo '<td class="number_box_container"><input id="number-box" min="1" class="number_box form-control" type="number" value="'.$dato.'"></input></td>';
                                    $auxiliar=$auxiliar*$dato;
                                    $totalAcumulado=$totalAcumulado+$auxiliar;
                                }
                                if($contador==4)//Talla
                                {
                                    echo '<td>'.$dato.'</td>';
                                }
                                $contador++;
                            }
                            echo '
                                <td class="contenedor_precio">$<span class="subtotal">'.$auxiliar.'</span></td>
                            </tr>';
                        }
                        
                    ?>
                    <tr>
                        <td id="last-row"></td>
                        <td id="last-row"></td>
                        <td id="last-row"></td>
                        <td id="last-row"></td>
                        <td id="last-row">Total</td>
                        <td id="last-row">$<span class="total"><?php echo $totalAcumulado; ?></span></td>
                    </tr>
                </table>
                <div id="cart-options">
                    <a href="index.php" class="btn btn-exito">Seguir comprando</a>
                    <input type="submit" name="checkout" class="comprar btn btn-principal" value="Realizar compra"></input>
                </div>
            </form>
        </div>
<?php
    require("./vistas/layouts/main-footer.php");
?>