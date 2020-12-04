<?php
       include "../../../Confing/conexion.php";

    if (!empty($_POST)) {
        $alert='';
        if (empty($_POST['producto'])) {

            $alert='<p class="msg_error">El producto es obligatorio</p>';
        }else {
            
            $mesa = $_POST['mesa'];
            $id_producto = $_POST['producto'];
            $descripcion = $_POST['descripcion'];
            $valor = $_POST['valor_d'];
            
            $query_c = mysqli_query($conection,"SELECT id_pedido AS id FROM pedido WHERE id_mesa = '$mesa'");
            $result_register = mysqli_fetch_array($query_c);
            $id_pedido = $result_register['id'];
            $result_c = mysqli_fetch_array($query_c);

            
                if ($result = 0) {
                    $alert='<p class="msg_error"> Debe crear un pedido.</p>';
                    echo $alert;
                }else {

                    $query_insert = mysqli_query($conection,"INSERT INTO descripcion (id_pedido,id_producto,descripcion,precio_d) 
                                                                        VALUES($id_pedido,'$id_producto','$descripcion',$valor)");
                    
                    if ($query_insert) {
                        header('location:nuevo_pedido.php?id='.$mesa);
                    }else {
                        $alert='<p class="msg_error"> ERROR al ingresar el usuario. </p>';
                    }
            }
        }
        mysqli_close($conection);
    }
?>