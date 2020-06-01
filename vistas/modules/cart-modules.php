<?php
    session_start();
    include("../controllers/connection.php");
    $conection=Connect();  
    //Revisa si el carrito ya existe si no existe lo crea
    if(!isset($_SESSION['Carrito'])){ 
        $_SESSION['Carrito'] = array(); 
    } 
    //Guarda un producto en el carrito
    if(isset($_POST['getElementId']) && isset($_POST['getAmount']) && isset($_POST['getSize']))
    {
        $sql="SELECT * FROM productos WHERE id=".$_POST['getElementId'].";";
        $result=mysqli_query($conection, $sql);
        while($row=mysqli_fetch_array($result))
        {
            $_SESSION['Carrito'][] = array(
                'id' => $_POST['getElementId'],
                'imagen' => $row['imagen1'],
                'nombre' => $row['nombre'],
                'talla' => $_POST['getSize'],
                'precio' => $row['precio'],
                'cantidad' => $_POST['getAmount']
            );
        }
    }

    //Elimina un articulo del carrito
    if(isset($_POST['id']))
    {
        $miCarrito=$_SESSION['Carrito'];
        $_SESSION['Carrito'] = array();
        $json="";
        foreach($miCarrito as $articulo)
        {
            $contadorArticulo=1;
            $Item2delete=false;
            $auxiliarId=0;
            $auxiliarImagen='';
            $auxiliarNombre='';
            $auxiliarTalla='';
            $auxiliarPrecio=0;
            $auxiliarCantidad=0;
            foreach($articulo as $data)
            {
                if($contadorArticulo==1)
                {
                    $auxiliarId=$data;
                    if($data==$_POST['id'])
                    {
                        $Item2delete=true;
                    }
                }
                if($contadorArticulo==2)
                {
                    $auxiliarImagen=$data;
                }
                if($contadorArticulo==3)
                {
                    $auxiliarNombre=$data;
                }
                if($contadorArticulo==4)
                {
                    $auxiliarTalla=$data;
                }
                if($contadorArticulo==5)
                {
                    $auxiliarPrecio=$data;
                }
                if($contadorArticulo==6)
                {
                    $auxiliarCantidad=$data;
                }
                $contadorArticulo++;
            }
            if(!$Item2delete)
            {
                $_SESSION['Carrito'][]=array(
                    'id' => $auxiliarId,
                    'imagen' => $auxiliarImagen,
                    'nombre' => $auxiliarNombre,
                    'talla' => $auxiliarTalla,
                    'precio' => $auxiliarPrecio,
                    'cantidad' => $auxiliarCantidad
                );
            }
        }
        $jsonstring = json_encode($_SESSION['Carrito']);
        echo $jsonstring;
    }
?>