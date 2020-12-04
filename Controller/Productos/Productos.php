<?php
    
    class ProductosController{

        public function index(){

            require_once "../../Models/Productos/ProductosModel.php";
            $productos = new Productos_model();
            $data["productos"]=$productos->get_productos();

            require_once "../../views/Productos/lista_producto.php";
        }
    }

?>