<?php
    include("../controllers/connection.php");
    $conection=Connect();

    if(isset($_POST["categoria"]))
    {
        $sql="SELECT * FROM prenda WHERE id_categoria=".$_POST['categoria'].";";
        $result=mysqli_query($conection, $sql);
        $json=array();
        while($row=mysqli_fetch_array($result))
        {
            $json[]= array(
                'id' => $row['id'],
                'prenda' => $row['prenda']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    if(isset($_POST["cortes"]))
    {
        $sql="SELECT * FROM corte WHERE id_prenda=".$_POST['cortes'].";";
        $result=mysqli_query($conection, $sql);
        $json=array();
        while($row=mysqli_fetch_array($result))
        {
            $json[]= array(
                'id' => $row['id'],
                'corte' => $row['corte']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    if(isset($_POST["telas"]))
    {
        $sql="SELECT * FROM tela;";
        $result=mysqli_query($conection, $sql);
        $json=array();
        while($row=mysqli_fetch_array($result))
        {
            $json[]= array(
                'id' => $row['id'],
                'tela' => $row['tela']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    if(isset($_POST["prenda_info"]))
    {
        $sql="SELECT * FROM productos WHERE id=".$_POST["prenda_info"].";";
        $result=mysqli_query($conection, $sql);
        $json=array();
        while($row=mysqli_fetch_array($result))
        {
            $json[]= array(
                'id' => $row['id'],
                'nombre' => $row['nombre'],
                'imagen1' => $row['imagen1'],
                'imagen2' => $row['imagen2'],
                'imagen3' => $row['imagen3'],
                'imagen4' => $row['imagen4'],
                'imagen5' => $row['imagen5'],
                'descripcion_prenda' => $row['descripcion_prenda'],
                'descripcion_tallas' => $row['descripcion_tallas'],
                'precio' => $row['precio']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

    if(isset($_POST["xs"]) || isset($_POST["s"]) || isset($_POST["m"]) || isset($_POST["l"]) || isset($_POST["xl"]) || isset($_POST["xxl"]) || isset($_POST["xxxl"]) || isset($_POST["prenda"]) || isset($_POST["cortes2send"]) || isset($_POST["telas2send"]) || isset($_POST["precio"]) || isset($_POST["category"]))
    {
        $sql="SELECT * FROM productos WHERE ";
        $indicadorAND=false;
        if($_POST["xs"]==true)
        {
            $sql=$sql."n_piezas_xs>0 ";
            $indicadorAND=true;
        }
        if($_POST["s"]==true)
        {
            if($indicadorAND)
            {
                $sql=$sql."OR n_piezas_s>0 ";
            }
            else
            {
                $sql=$sql."n_piezas_s>0 ";
                $indicadorAND=true;
            }
        }
        if($_POST["m"]==true)
        {
            if($indicadorAND)
            {
                $sql=$sql."OR n_piezas_m>0 ";
            }
            else
            {
                $sql=$sql."n_piezas_m>0 ";
                $indicadorAND=true;
            }
        }
        if($_POST["l"]==true)
        {
            if($indicadorAND)
            {
                $sql=$sql."OR n_piezas_l>0 ";
            }
            else
            {
                $sql=$sql."n_piezas_l>0 ";
                $indicadorAND=true;
            }
        }
        if($_POST["xl"]==true)
        {
            if($indicadorAND)
            {
                $sql=$sql."OR n_piezas_xl>0 ";
            }
            else
            {
                $sql=$sql."n_piezas_xl>0 ";
                $indicadorAND=true;
            }
        }
        if($_POST["xxl"]==true)
        {
            if($indicadorAND)
            {
                $sql=$sql."OR n_piezas_xxl>0 ";
            }
            else
            {
                $sql=$sql."n_piezas_xxl>0 ";
                $indicadorAND=true;
            }
        }
        if($_POST["xxxl"]==true)
        {
            if($indicadorAND)
            {
                $sql=$sql."OR n_piezas_xxxl>0 ";
            }
            else
            {
                $sql=$sql."n_piezas_xxxl>0 ";
                $indicadorAND=true;
            }
        }
        if(isset($_POST["prenda"]))
        {
            if($indicadorAND)
            {
                $sql=$sql."AND id_prenda=".$_POST["prenda"]." ";
            }
            else
            {
                $sql=$sql."id_prenda=".$_POST["prenda"]." ";
                $indicadorAND=true;
            }
        }
        if(isset($_POST["cortes2send"]))
        {
            foreach($_POST["cortes2send"] as $valor)
            {
                if($indicadorAND)
                {
                    $sql=$sql."AND id_corte=".$valor." ";
                }
                else
                {
                    $sql=$sql." id_corte=".$valor." ";
                    $indicadorAND=true;
                }
            }
        }
        if(isset($_POST["telas2send"]))
        {
            foreach($_POST["telas2send"] as $valor)
            {
                if($indicadorAND)
                {
                    $sql=$sql."AND id_tela=".$valor." ";
                }
                else
                {
                    $sql=$sql."id_tela=".$valor." ";
                    $indicadorAND=true;
                }
            }
        }
        if(isset($_POST["precio"]))
        {
            if($indicadorAND)
            {
                $sql=$sql."AND precio<=".$_POST["precio"]." ";
            }
            else
            {
                $sql=$sql."precio<=".$_POST["precio"]." ";
                $indicadorAND=true;
            }
        }
        if(isset($_POST["category"]))
        {
            if($indicadorAND)
            {
                $sql=$sql."AND id_categoria=".$_POST["category"]." ";
            }
            else
            {
                $sql=$sql."id_categoria=".$_POST["category"]." ";
                $indicadorAND=true;
            }
        }
        $sql=$sql.";";
        $result=mysqli_query($conection, $sql);
        $json=array();
        while($row=mysqli_fetch_array($result))
        {
            $json[]= array(
                'id' => $row['id'],
                'nombre' => $row['nombre'],
                'imagen1' => $row['imagen1'],
                'imagen2' => $row['imagen2'],
                'imagen3' => $row['imagen3'],
                'imagen4' => $row['imagen4'],
                'imagen5' => $row['imagen5'],
                'descripcion_prenda' => $row['descripcion_prenda'],
                'precio' => $row['precio']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>