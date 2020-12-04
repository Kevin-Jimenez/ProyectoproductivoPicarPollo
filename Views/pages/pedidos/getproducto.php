<?php
include "../../../Confing/conexion.php";

$nombre =$_GET['producto'];
$producto_a= mysqli_query($conection,"SELECT id_producto,nombre_p,precio_p FROM producto WHERE (estatus = 1 AND nombre_p = '$nombre')");
$array = array();
# WHERE (estatus = 1 AND nombre_p LIKE '%$producto%')
    if (mysqli_num_rows($producto_a) > 0) {
        
        
        $producto = mysqli_fetch_array($producto_a);
        echo json_encode($producto);
    }else{
        $error = array('status' => 400);
        echo json_encode((object)$error);
    }
?>