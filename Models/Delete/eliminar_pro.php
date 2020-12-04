<?php
include "../../Confing/conexion.php";
    
    if (!empty($_POST)) {
        $idusuario = $_POST['idusuario'];

        $query_delete_c = mysqli_query($conection,"UPDATE producto SET estatus = 2
                                                                    WHERE id_producto = $idusuario");


        if ($query_delete_c) {
            header('location: ../../Views/pages/Lista/lista_p.php');
            mysqli_close($conection);

        }else {
            echo "Error al eliminar";
        }

    }
?>