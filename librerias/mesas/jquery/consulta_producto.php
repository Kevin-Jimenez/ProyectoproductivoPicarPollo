<?php
       include "../../../bd/conexion.php";

       $producto = $_GET['q'];

       $resultado = $conexion->query("");
       
       $datos = array();

       while ($row = $resultado -> fetch_assoc()) {
           $datos[] = $row['nombre_p'];
       }

       echo json_encode($datos);
?>