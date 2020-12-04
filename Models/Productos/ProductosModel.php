<?php

class Productos_model{

    private $db;
    Private $productos;

    public function __construct(){

        $this->db = Conectar::conexion();
        $this->productos = array();
    }

    public function get_productos(){

        $sql = "SELECT * FROM select_producto";
        $resultado = $this->db->query($sql);
        while ($row = $resultado->fetch_assoc()) {
            
            $this->productos[] = $row;
            
        }

        return $this->productos;
    }

}


?>