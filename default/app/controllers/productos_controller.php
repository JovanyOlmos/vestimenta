<?php

class ProductosController extends ScaffoldController
{



    public $model = 'productos';

    public function buscar($categoria, $talla = '', $precio = '')
    {
        View::template(NULL);
        View::response('json', NULL);

        $idCategoria = (new categoria)->find("categoria LIKE '$categoria' ");
        //| $idTalla = (new talla)->find("");

 

        if ($categoria) {
            
            // formatear precio
            $sql = "precio = $precio";
            if( strpos($precio, '-') ){
                $precio = explode('-', $precio);
                $sql = "precio >= $precio[0] && precio <= $precio[1]";
            }
      
            // ejecutar consulta para la categoria de producto
            foreach ($idCategoria  as $key => $categoria) {
                $this->data = (new productos)->find("id_categoria LIKE $categoria->id && " .$sql);
              
            }
        }

       




     
        

        $this->count = count($this->data);
    }
}
