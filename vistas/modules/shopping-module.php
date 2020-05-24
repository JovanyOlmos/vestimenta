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

    if(isset($_POST["xs"]) || isset($_POST["s"]) || isset($_POST["m"]) || isset($_POST["l"]) || isset($_POST["xl"]) || isset($_POST["xxl"]) || isset($_POST["xxxl"]) || isset($_POST["prenda"]) || isset($_POST["cortes2send"]) || isset($_POST["telas2send"]) || isset($_POST["precio"]))
    {
        echo $_POST["xs"]."-".$_POST["s"]."-".$_POST["m"];
        $sql="SELECT * FROM productos WHERE ";
        $indicadorAND=false;
        if($_POST["xs"])
        {
            $sql=$sql.$_POST["xs"]."xs>0 ";
            $indicadorAND=true;
        }
        if($_POST["s"])
        {
            if($indicadorAND)
            {
                $sql=$sql."OR s>0 ";
            }
            else
            {
                $sql=$sql."s>0 ";
                $indicadorAND=true;
            }
        }
        if($_POST["m"])
        {
            if($indicadorAND)
            {
                $sql=$sql."OR m>0 ";
            }
            else
            {
                $sql=$sql." m>0";
                $indicadorAND=true;
            }
        }
        if($_POST["l"])
        {
            if($indicadorAND)
            {
                $sql=$sql."OR l>0 ";
            }
            else
            {
                $sql=$sql." l>0";
                $indicadorAND=true;
            }
        }
        if($_POST["xl"])
        {
            if($indicadorAND)
            {
                $sql=$sql."OR xl>0 ";
            }
            else
            {
                $sql=$sql." xl>0";
                $indicadorAND=true;
            }
        }
        if($_POST["xxl"])
        {
            if($indicadorAND)
            {
                $sql=$sql."OR xxl>0 ";
            }
            else
            {
                $sql=$sql." xxl>0";
                $indicadorAND=true;
            }
        }
        if($_POST["xxxl"])
        {
            if($indicadorAND)
            {
                $sql=$sql."OR xxxl>0 ";
            }
            else
            {
                $sql=$sql." xxxl>0";
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
                $sql=$sql." id_prenda=".$_POST["prenda"]." ";
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
                    $sql=$sql." id_tela=".$valor." ";
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
                $sql=$sql." precio<=".$_POST["precio"]." ";
                $indicadorAND=true;
            }
        }
        $sql=$sql.";";
        echo $sql;
    }
?>