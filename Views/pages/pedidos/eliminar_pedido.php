<?php
       include "../../../Confing/conexion.php";

    if (!empty($_POST)) {
        $alert='';
        if (empty($_POST['pedido'])) {

            $alert='<p class="msg_error">El pedido es obligatorio</p>';
        }else {
            
            $pedido = $_POST['pedido'];
            $mesa = $_POST['mesa'];
            $valor_p = $_POST['valor_p'];

            $update_p = mysqli_query($conection,"UPDATE ventas SET fin_p = CURRENT_TIME(), precio_p = $valor_p, estado = 2  WHERE (id_mesa = $mesa AND estado = 1)");
            $update_m = mysqli_query($conection,"UPDATE mesa SET estado = 1 WHERE id_mesa = $mesa");
            $delete_p = mysqli_query($conection,"DELETE FROM pedido WHERE id_pedido = $pedido");
        mysqli_close($conection);

        if ($delete_p && $update_m && $update_p) {
            header('location:../mesasdis/mesas.php');
            mysqli_close($conection);

        }else {
            echo "Error al eliminar";
        }
    }
}
?>

