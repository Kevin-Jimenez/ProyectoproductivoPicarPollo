<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link href="../../../librerias/mesas/css/main.css" rel="stylesheet" type="text/css"/>
    <link href="../../../librerias/mesas/css/mesas.css" rel="stylesheet" type="text/css"/>
    <!-- <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <link rel="stylesheet" id="theme-pattern" type="text/css" href="#"/> -->
    <link href="../../../librerias/cssuc/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../../../librerias/public/img/Logo.jpeg">
    <title>Picar Pollo</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../librerias/public/css/modal.css">
    <link rel="stylesheet" href="../../../librerias/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../librerias/public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../librerias/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../librerias/public/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<style type="text/css">
    body{
        background: url(../../../librerias/mesas/giffondo.gif);
        background-size:cover;

    }
</style>

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

    if (!empty($_POST)) {

        if (empty($_POST['mesa'])) {
            $alert='<p class="msg_error">Selecione una mesa</p>';
            echo  $alert;
        }else {

            $mesa = $_POST['mesa'];


            $usuario = $_SESSION['user'];
            $query= mysqli_query($conection,"SELECT e.id_empleado,e.documento_e,u.nombre_u,u.usuario 
                                                            FROM empleado e 
                                                            INNER JOIN usuario u
                                                            ON u.id_usuario = e.id_usuario WHERE u.usuario = '$usuario'");
            
            while ($data = mysqli_fetch_array($query)) {
                $documento = $data['documento_e'];
                $nombre = $data['nombre_e'];
            }

            $query= mysqli_query($conection,"SELECT id_pedido FROM pedido  WHERE id_mesa = '$mesa'");
            $result  = mysqli_fetch_array($query);

                if ($result > 0) {
                    $alert='<p class="msg_error"> la mesa tiene pedido.</p>';
                    echo  $alert;
                }else {

                    $query_insert = mysqli_query($conection,"INSERT INTO pedido (fecha_p, tiempo_inicio,tiempo_fin, id_mesa, id_empleado) 
                                                                          VALUES (CURRENT_DATE(), CURRENT_TIME(), CURRENT_TIME(), '$mesa', $documento)");

                    $query_ventas = mysqli_query($conection,"INSERT INTO ventas (id_mesa,fecha_p,inicio_p,fin_p) 
                                                            VALUES ($mesa,CURRENT_DATE(), CURRENT_TIME(), CURRENT_TIME())");
                    $update_m = mysqli_query($conection,"UPDATE mesa SET estado = 2 WHERE id_mesa = $mesa");
                    if ($query_insert && $update_m && $query_ventas ) {
                        $mesa = $_REQUEST['id'];
                        header('location:nuevo_pedido.php?id='.$mesa);
                    }else {
                        $alert='<p class="msg_error"> ERROR al ingresar el usuario. </p>';
                    }
            }
        }
        mysqli_close($conection);
    }
?>
<br><br><br><br><br>
    <form action="" method="post" class="crear_pedido">
       <div class="form-row">
            <div class="col-md-6 mb-3">
                <input type="hidden" name="mesa" value="<?php echo $mesa = $_REQUEST['id']; ?>">
        <input type="submit"class="btn btn-success boton form-control" value="Crear Pedido de la mesa #<?php echo $mesa = $_REQUEST['id']; ?>"  >
    </form>
</body>
</html>