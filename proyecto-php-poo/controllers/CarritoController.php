<?php
require_once 'models/producto.php';
class carritoController{
    public function index() {
        echo "controlador pedidos, Acción index";
    }
    
    public function add() {
        if(isset($_GET['id'])):
            $producto_id = $_GET['id'];
        else:
            header('Location:'.base_url);
        endif;
        if($_SESSION['carrito']):
            $counter = 0;
            foreach ($_SESSION['carrito'] as $indice => $elemento):
                if($elemento['id_producto'] == $producto_id):
                    $_SESSION['carrito'][$indice]['unidades']++;
                $counter++;
                endif;
            endforeach;
        endif;
        
        if(!isset($counter) || $counter == 0):
            // Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            // Añadir al carrito
            if(is_object($producto)):
                $_SESSION['carrito'][] = array(
                "id_producto" => $producto->id,
                "precio" => $producto->precio,
                "unidades" => 1,
                "producto" => $producto
                );
            endif;
        endif;    
        header("Location".base_url."carrito/index");
    }
    
    public function remove() {
        
    }
    
    public function delete_all() {
        unset($_SESSION['carrito']);
    }
    
    
}