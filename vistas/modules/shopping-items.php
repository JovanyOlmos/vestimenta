<?php
    function GetClothForFilters() {
        $conection=Connect();
        $sql="SELECT * FROM tela;";
        $query=mysqli_query($conection, $sql);
            if ($query->num_rows > 0) {
              while($row = $query->fetch_assoc()){
                  echo '<label class="check-group">'.$row['tela'].'
                            <input name="'.$row['tela'].'" type="checkbox">
                            <span class="checkmark"></span>
                        </label>';
              }
            } else { echo "no hay datos"; }
            mysqli_close($conection);
    }

    function GetKindForFilters() {
        $conection=Connect();
        $sql="SELECT * FROM prenda;";
        $query=mysqli_query($conection, $sql);
            if ($query->num_rows > 0) {
              while($row = $query->fetch_assoc()){
                  echo '<option value="'.$row['prenda'].'">'.$row['prenda'].'</option>';
              }
            } else { echo "no hay datos"; }
            mysqli_close($conection);
    }

    function Url($temporada, $categoria) {
        if($temporada!=NULL && $categoria!=NULL)
        { 
            return 'shopping.php?temporada='.$temporada.'&categoria='.$categoria;
        }
        else
        {
            if($temporada!=NULL) {
                return 'shopping.php?temporada='.$temporada;
            } else {
                if($categoria!=NULL) {
                    return 'shopping.php?categoria='.$categoria;
                }
            }
        }
    }

    function ShowItems($temporada, $categoria) {
        $conection=Connect();
        if($temporada!=NULL || $categoria!=NULL)
        {
            if($categoria!=NULL) { $sql="SELECT * FROM productos WHERE id_categoria=".$categoria.";"; }
            if($temporada!=NULL) { $sql="SELECT * FROM productos WHERE id_temporada=".$temporada.";"; }
            $query=mysqli_query($conection, $sql);
            if ($query->num_rows > 0) {
              while($row = $query->fetch_assoc()){
                echo '<div id="item-card">
                        <img src="'.$row['imagen1'].'" width="50" height="50" id="item-image">
                        <h5>'.$row['nombre'].'</h5>
                        <p>'.$row['descripcion_prenda'].'</p>
                        <div id="item-footer">
                            <h6>$'.$row['precio'].'</h6>
                            <div id="buttons-item-footer">
                            <a href=""><i class="far fa-heart"></i></a>
                            <a href="#" id="add-it"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>';
              }
            }
        }
        mysqli_close($conection);
    }
?>