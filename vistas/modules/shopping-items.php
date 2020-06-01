<?php
    function ShowItems($temporada, $categoria) {
        $conection=Connect();
        if($temporada!=NULL || $categoria!=NULL)
        {
            if($categoria!=NULL) { $sql="SELECT * FROM productos WHERE id_categoria=".$categoria.";"; }
            if($temporada!=NULL) { $sql="SELECT * FROM productos WHERE id_temporada=".$temporada.";"; }
            $query=mysqli_query($conection, $sql);
            if ($query->num_rows > 0) {
              while($row = $query->fetch_assoc()){
                echo '<div id="item-card" attrIdItem="'.$row['id'].'">
                        <img src="'.$row['imagen1'].'" width="50" height="50" id="item-image">
                        <h5 id="nombre-producto2send">'.$row['nombre'].'</h5>
                        <p>'.$row['descripcion_prenda'].'</p>
                        <div id="item-footer">
                            <h6>$'.$row['precio'].'</h6>
                            <div class="buttons-item-footer">
                            <a class="add-favorite" href="#"><i class="far fa-heart"></i></a>
                            <button class="add-it"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>';
              }
            }
        }
        mysqli_close($conection);
    }

    function ShowFavorites($idUsuario) {
        $conection=Connect();
        $sql="SELECT * FROM favoritos WHERE id_usuario=".$idUsuario.";";
        $query=mysqli_query($conection, $sql);
        while($row = $query->fetch_assoc()){
            $sql2="SELECT * FROM productos WHERE id=".$row['id_producto'].";";
            $query2=mysqli_query($conection, $sql2);
            while($row2 = $query2->fetch_assoc()){
                echo '<div id="item-card" attrIdItem="'.$row2['id'].'">
                    <img src="'.$row2['imagen1'].'" width="50" height="50" id="item-image">
                    <h5 id="nombre-producto2send">'.$row2['nombre'].'</h5>
                    <p>'.$row2['descripcion_prenda'].'</p>
                    <div id="item-footer">
                        <h6>$'.$row2['precio'].'</h6>
                        <div class="buttons-item-footer">
                        <a class="add-favorite" href="#"><i class="corazon fas fa-heart"></i></a>
                        <button class="add-it"><i class="fas fa-cart-plus"></i></button>
                        </div>
                    </div>
                </div>';
            }
        }
    }
?>