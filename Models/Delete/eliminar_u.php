<?php
include "../../Confing/conexion.php";
    
    if (!empty($_POST)) {
        $idusuario = $_POST['idusuario'];

        $query_delete_c = mysqli_query($conection,"DELETE FROM empleado WHERE id_usuario = $idusuario");

        $query_delete_u = mysqli_query($conection,"DELETE FROM usuario WHERE id_usuario = $idusuario");
        mysqli_close($conection);

        if ($query_delete_u && $query_delete_c) {
            header('location: ../../Views/pages/Lista/lista_u.php');
            mysqli_close($conection);

        }else {
            echo "Error al eliminar";
        }

    }
?>