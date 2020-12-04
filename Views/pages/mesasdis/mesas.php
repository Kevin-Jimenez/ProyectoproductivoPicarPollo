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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <a class="nav-item nav-link" style="color: white;" href="../Mesero/">Volver</a>
                <a class="nav-item nav-link" style="color: white;" href="mesas.php">Mesas</a>
                
            </div>
        </div>
    </nav> 

    <br><br><br><br>

        
                    <div><strong style="font-family: garamond;
                                            color:white;"><h1>Consulta Que Mesas Tenemos Disponibles</h1></strong></div>
                     <div class="clearfix"></div>
                    <div class="container">
                    <div class="rock_book_table_main">
                        <div class="row">
                        <div class="col-lg-12">
                        <div><strong style="font-family: garamond;
                                            color:black;"><br><h1>Primera Planta</h1></strong></div>
                <?php
                
                include "../../../Confing/conexion.php";
                            $query = mysqli_query($conection,"SELECT * FROM mesa ORDER BY numero_m ASC
                                                                            LIMIT 0,9");
                    mysqli_close($conection);
                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <a href="../pedidos/pedido.php?id=<?php echo $data["id_mesa"]?>">
                        <div class="col-sm-2 rock_book_table contenedor-mesa ">
                        <?php
                            
                            switch ($data["estado"]) {
                                case '1':
                                    ?>
                                    <div class="libre">
                                    <img src="../../../librerias/mesas/images/table/mesa.png"alt="">
                                    <?php   
                                    break;
                                case '2':
                                    ?>
                                    <div class="ocupada">
                                    <img src="../../../librerias/mesas/images/table/ocupada.png" alt="">
                                    <?php   
                                    break;
                                
                                default:
                                    ?>
                                    <div class="alerta">
                                    <img src="../../../librerias/mesas/images/table/alerta.png"alt="">
                                    <?php 
                                    break;
                            }
                        
                        ?>

                        
                            <h2>Mesa #<?php echo $data["numero_m"]?></h2>
                        </div>
                        </div>
                        </a>
                <?php
                        }
                    }

                ?>
                </div>
                </div>
                </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="container">
                    <div class="rock_book_table_main">
                        <div class="row">
                        <div class="col-lg-12">
                        <div><strong style="font-family: garamond;
                                            color:black;"><h1>Segunda Planta</h1></strong></div>
                                            <?php
                include "../../../Confing/conexion.php";
                            $query = mysqli_query($conection,"SELECT * FROM mesa ORDER BY numero_m ASC
                                                                            LIMIT 10,40");
                    mysqli_close($conection);
                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <a href="../pedidos/pedido.php?id=<?php echo $data["id_mesa"]?>">
                        <div class="col-sm-2 rock_book_table contenedor-mesa ">
                        <?php
                            
                            switch ($data["estado"]) {
                                case '1':
                                    ?>
                                    <div class="libre">
                                    <img src="../../../librerias/mesas/images/table/mesa.png"alt="">
                                    <?php   
                                    break;
                                case '2':
                                    ?>
                                    <div class="ocupada">
                                    <img src="../../../librerias/mesas/images/table/ocupada.png" alt="">
                                    <?php   
                                    break;
                                
                                default:
                                    ?>
                                    <div class="alerta">
                                    <img src="../../../librerias/mesas/images/table/alerta.png"alt="">
                                    <?php 
                                    break;
                            }
                        
                        ?>

                        
                            <h2>Mesa #<?php echo $data["numero_m"]?></h2>
                        </div>
                        </div>
                        </a>
                <?php
                        }
                    }

                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </script>
	</body>
</html>  