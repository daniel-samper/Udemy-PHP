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
            
        else:
            // conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();
            
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