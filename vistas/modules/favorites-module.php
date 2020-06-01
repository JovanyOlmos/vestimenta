<?php
    session_start();
    include("../controllers/connection.php");
    $conection=Connect();

    if(isset($_POST["idPrenda"]))
    {
        $sql="SELECT * FROM favoritos WHERE id_usuario=".$_SESSION['id']." AND id_producto=".$_POST['idPrenda'].";";
        $query=mysqli_query($conection, $sql);
        if ($query->num_rows > 0) {
            echo 'Ya tienes este articulo en tus favoritos';
        }
        else
        {
            $sql2="INSERT INTO favoritos(id_usuario, id_producto) VALUES (".$_SESSION['id'].",".$_POST["idPrenda"].");";
            $result2=mysqli_query($conection, $sql2);
            echo 'Guardado en tus favoritos';
        }
    }

    if(isset($_POST["idPrenda2remove"]))
    {
        $sql="DELETE FROM favoritos WHERE id_usuario=".$_SESSION['id']." AND id_producto=".$_POST["idPrenda2remove"].";";
        $result=mysqli_query($conection, $sql);
        $sql="SELECT * FROM favoritos WHERE id_usuario=".$_SESSION['id'].";";
        $query=mysqli_query($conection, $sql);
        $json=array();
        while($row = $query->fetch_assoc()){
            $sql2="SELECT * FROM productos WHERE id=".$row['id_producto'].";";
            $query2=mysqli_query($conection, $sql2);
            while($row2 = $query2->fetch_assoc()){
                $json[]= array(
                    'id' => $row2['id'],
                    'imagen' => $row2['imagen1'],
                    'nombre' => $row2['nombre'],
                    'descripcion_prenda' => $row2['descripcion_prenda'],
                    'precio' => $row2['precio']
                );
            }
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>