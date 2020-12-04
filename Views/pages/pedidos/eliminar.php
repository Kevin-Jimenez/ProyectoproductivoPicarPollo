<?php
include "../../../Confing/conexion.php";
    
    if (!empty($_REQUEST['id'])) {
        $idusuario = $_REQUEST['id'];
        $idmesa = $_REQUEST['mesa'];

        $query_delete= mysqli_query($conection,"DELETE FROM descripcion WHERE id_descripcion = $idusuario");
        mysqli_close($conection);

        if ($query_delete) {
            $idusuario = $_REQUEST['id'];
            header('location: nuevo_pedido.php?id='.$idmesa);
            mysqli_close($conection);

        }else {
            echo "Error al eliminar";
        }
        
    }
    //UPDATE pedido SET tiempo_fin = CURRENT_TIME() WHERE id_pedido = 1
?>

