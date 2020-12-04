<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
<?php
        require '../../../Controller/Login/StarterController.php';
        $is = new StarterController();
    
        if (empty($_SESSION['nombre'])) {
          header("location: ../../../Controller/Login/LoginController.php?action=login");
        }
        if ($_SESSION['rol'] == 1 ){
          header('location: ../../');
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../../librerias/mesas/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../../librerias/mesas/css/mesas.css" rel="stylesheet" type="text/css"/>
    <!-- <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <link rel="stylesheet" id="theme-pattern" type="text/css" href="#"/> -->
    <link href="../../librerias/cssuc/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="librerias/public/img/Logo.jpeg">
    <title>Picar Pollo</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../../librerias/public/css/modal.css">
    <link rel="stylesheet" href="../../librerias/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../librerias/public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../librerias/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../librerias/public/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-item nav-link" style="color: white;" href="../Mesero/">Volver</a>
                <a class="nav-item nav-link" style="color: white;" href="../mesasdis/mesas.php">Mesas</a>
                
            </div>
        </div>
    </nav>  
    <?php
       include "../../../Confing/conexion.php";


    if (empty($_REQUEST['id'])) {
        header('location:../mesasdis/mesas.php');
        mysqli_close($conection);
     }else{
            
            $idusuario = $_REQUEST['id'];
            $estado = mysqli_query($conection,"SELECT * FROM mesa 
                                                     WHERE (id_mesa = $idusuario AND estado = 3)");
            $result_estado = mysqli_num_rows($estado);
            $query = mysqli_query($conection,"SELECT * FROM pedido p 
                                                     WHERE (id_mesa = $idusuario AND estado = 1)");
            
            mysqli_close($conection);
            $result = mysqli_num_rows($query);
            if ($result_estado > 0) {
                header('location:alerta.php?id='.$idusuario);
            }else{
            if ($result > 0) {
                header('location:nuevo_pedido.php?id='.$idusuario);
            }else{
                $idusuario = $_REQUEST['id'];
                header('location:crear_pedido.php?id='.$idusuario);
            }
        }
    }
    
?>
</body>
</html>