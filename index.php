<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>Picar Pollo</title>
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="librerias/public/css/styles.css">
    <link rel="stylesheet" href="librerias/public/css/modal3.css">
    <link  rel="icon"   href="librerias/public/img/logo.jpg" type="image/jpg" /> 
</head>
<body>
        <div class="social">
        <ul>

            <li><a href="https://www.facebook.com/photo/?fbid=105350764443585&set=a.105350797776915&__tn__=%3C" target="_blank" class="icon-facebook"><img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=28 height=28  /></a></li>
            <li><a href="https://wa.me/573058164509?text=Hola, quiero un domicilio, por favor " target="_blank" class="icon-twitter"><img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" width=28 height=28 alt="Escribenos"></a></li>
            <li><a href="https://mail.google.com/mail/u/0/?ogbl#inbox?compose=CllgCHrhThVBrMlXkDNDLjjtqVSQSswRxVRwwgRTFSCCGNhSWFwjQdqDCnxNJhqDXFNbLDgcDmL" target="_blank" class="iconmail-"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/245px-Gmail_icon_%282020%29.svg.png" width=28 height=28  /></a></li>
    
        </ul>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <img class="nav-item2 nav-link" src="librerias/public/img/logo1.0.png" style="width: 100px;height: 50px; margin-left: 100px">
                <a class="nav-item nav-link" href="#header" style="margin-left: 105px;">Inicio <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#menu">Menu</a>
                <a class="nav-item nav-link" href="#nosotros">Nosotros</a>
                <a class="nav-item nav-link" href="Controller/Login/LoginController.php?action=login" >Acceder
                <img src="librerias/public/img/logout.png" style="width: 20px;"></a>

            </div>
        </div>
    </nav>

    <div class="container-fluid" id="header">
        <section class="cover">
            <div class="container">
                <div class="text-center">

                    <h1 class="tit" id="titulo">Restaurante - Frutería</h1><br>
                    <p class="text-center">Abrir las puertas al mundo digital es complicado, ya que no podemos transmitir lo 
                                           que mejor hacemos como lo es el olor, sabor y texturas de nuestros platos. ahora te invitamos a 
                                           dar un paseo por la web, cuando quieras sentir y vivir la cocina de picar pollo, aquí estamos.</p>

                </div>
            </div>
        </section>
    </div>
    
    <div class="container">
    <section id="menu" class="text-center">
            <h2>Menú</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="librerias/public/img/restau.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">RESTAURANTE / ASADERO</h5>
                            <div class="card-text">
                            <ul>
                                <p>
                                    En picar Pollo encontraras una gran variedad de platos para el almuerzo, a trevete 
                                    disgustar de los deliciosos sabores. <br>
                                    <br>
                                    ¡Te Esperamos!
                                </p>
                                <hr>
                                
                                <a href="#" class="btnPO ver">                                
                                    <div id="container">
                                        <div id="button-container">
                                            <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                            <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>  
                                                                        
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorPO">
                    <div class="ventanaPO ventana-cerrarPO">
                        <p class="cerrarPO">X</p>
                        <div class="galeria-titulo">
                            <h2>RESTAURANTE / ASADERO</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php 
                                   include "Confing/conexion.php";

                                   $query = mysqli_query($conection,"SELECT * FROM producto_pollo");
                                   mysqli_close($conection);
                                   $result = mysqli_num_rows($query);
                                   if ($result > 0) {
                                       while ($data = mysqli_fetch_array($query)) {
                                           if ($data['imagen_p'] != 'img_producto.png') {
                                               $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                           }else{
                                               $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                           }
                                   ?>
                               <div class="imagen">
                                   <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                   <div class="overlay">
                                       <h3><?php echo $data["nombre_p"]?></h3>
                                       <h4><?php echo '$'.$data["precio_p"]?></h4>
                                       <p><i><?php echo $data["descripcion_P"]?></i></p>
                                   </div>
                               </div>

                               <?php
                                       }
                                   }

                               ?>
                               </div>
                           </div>
                               <div class="paginador">
                                   <p></p>
                               </div>
                       </div>
                   </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="librerias/public/img/carn.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CARNES</h5>
                            <div class="card-text">
                            <ul>
                                <p>
                                    En el area de carnes de Picar Pollo encontraras lo mejor con los mejores sabores,
                                    no temas de mirar este menú. <br>
                                    <br>
                                    ¡Te Esperamos!
                                </p>
                                <hr>
                                <a href="#" class="btnCA ver">                                <div id="container">
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorCA">
                    <div class="ventanaCA ventana-cerrarCA">
                        <p class="cerrarCA">X</p>
                        <div class="galeria-titulo">
                            <h2>Carnes</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php
                                
                                    include "Confing/conexion.php";

                                            $query = mysqli_query($conection,"SELECT * FROM producto_carne");
                                            mysqli_close($conection);
                                            $result = mysqli_num_rows($query);
                                            if ($result > 0) {
                                                while ($data = mysqli_fetch_array($query)) {
                                                    if ($data['imagen_p'] != 'img_producto.png') {
                                                        $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                                    }else{
                                                        $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                                    }
                                            ?>
                                        <div class="imagen">
                                            <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                            <div class="overlay">
                                                <h3><?php echo $data["nombre_p"]?></h3>
                                                <h4><?php echo '$'.$data["precio_p"]?></h4>
                                                <p><i><?php echo $data["descripcion_P"]?></i></p>
                                            </div>
                                        </div>

                                        <?php
                                                }
                                            }

                                        ?>
                                        </div>
                                    </div>
                                        <div class="paginador">
                                            <p></p>
                                        </div>
                                </div>
                            </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="librerias/public/img/pescad.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PESCADERIA</h5>
                            <div class="card-text">
                            <ul>
                                <p>
                                    La Pescaderia, una de nuestras mejores areas a la hora de brindar buenos y deliciosos 
                                    platos a nuestros clientes. <br>
                                    <br>
                                    ¡Te Esperamos!
                                </p>
                                        <hr>
                                        <a href="#" class="btnPE ver">
                                <div id="container">
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorPE">
                    <div class="ventanaPE ventana-cerrarPE">
                        <p class="cerrarPE">X</p>
                        <div class="galeria-titulo">
                            <h2>Pescaderia</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php
                                    include "Confing/conexion.php";

                                    $query = mysqli_query($conection,"SELECT * FROM producto_pescado");
                                    mysqli_close($conection);
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            if ($data['imagen_p'] != 'img_producto.png') {
                                                $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                            }else{
                                                $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                            }
                                    ?>
                                <div class="imagen">
                                    <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                    <div class="overlay">
                                        <h3><?php echo $data["nombre_p"]?></h3>
                                        <h4><?php echo '$'.$data["precio_p"]?></h4>
                                        <p><i><?php echo $data["descripcion_P"]?></i></p>
                                    </div>
                                </div>

                                <?php
                                        }
                                    }

                                ?>
                                </div>
                            </div>
                                <div class="paginador">
                                    <p></p>
                                </div>
                        </div>
                    </div> 
                                    
                        <div class="col-lg-4 col-md-6" >
                    <div class="card">
                        <img src="librerias/public/img/bebidas.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BEBIDAS</h5>
                            <div class="card-text">
                            <ul>
                                <p>
                                    ¿Deseas algo de tomar y no sabes donde encontrarlo?, En Picar Pollo te ofrecemos
                                    las mejores bebidas.<br>
                                    <br>
                                    ¡Te Esperamos!
                                </p>
                                <hr>
                            <a href="#" class="btnBE ver">
                                <div id="container">
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorBE">
                    <div class="ventanaBE ventana-cerrarBE">
                        <p class="cerrarBE">X</p>
                        <div class="galeria-titulo">
                            <h2>Bebidas</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php 
                                    include "Confing/conexion.php";

                                    $query = mysqli_query($conection,"SELECT * FROM producto_bebida");
                                    mysqli_close($conection);
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            if ($data['imagen_p'] != 'img_producto.png') {
                                                $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                            }else{
                                                $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                            }
                                    ?>
                                <div class="imagen">
                                    <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                    <div class="overlay">
                                        <h3><?php echo $data["nombre_p"]?></h3>
                                        <h4><?php echo '$'.$data["precio_p"]?></h4>
                                        <p><i><?php echo $data["descripcion_P"]?></i></p>
                                    </div>
                                </div>
 
                                <?php
                                        }
                                    }
 
                                ?>
                                </div>
                            </div>
                                <div class="paginador">
                                    <p></p>
                                </div>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6" >
                    <div class="card">
                        <img src="librerias/public/img/fruta.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FRUTERIA</h5>
                            <div class="card-text">
                            <ul>
                                <p>
                                    ¿Deseas una rica ensalada de frutas?, no esperes más Picar Pollo 
                                    te ofrece las mejores al mejor precio.<br>
                                    <br>
                                    ¡Te Esperamos!
                                </p>
                                <hr>
                                 <a href="#" class="btnFU">
                                <div id="container">
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorFU">
                    <div class="ventanaFU ventana-cerrarFU">
                        <p class="cerrarFU">X</p>
                        <div class="galeria-titulo">
                            <h2>Fruteria</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php 
                                    include "Confing/conexion.php";

                                    $query = mysqli_query($conection,"SELECT * FROM producto_fruteria");
                                    mysqli_close($conection);
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            if ($data['imagen_p'] != 'img_producto.png') {
                                                $foto = 'Views/pages/Registrar/img/uploads/'.$data['imagen_p'];
                                            }else{
                                                $foto = 'Views/pages/Registrar/img/'.$data['imagen_p'];
                                            }
                                    ?>
                                <div class="imagen">
                                    <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                    <div class="overlay">
                                        <h3><?php echo $data["nombre_p"]?></h3>
                                        <h4><?php echo '$'.$data["precio_p"]?></h4>
                                        <p><i><?php echo $data["descripcion_P"]?></i></p>
                                    </div>
                                </div>
 
                                <?php
                                        }
                                    }
 
                                ?>
                                </div>
                            </div>
                                <div class="paginador">
                                    <p></p>
                                </div>
                        </div>
                    </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="librerias/public/img/crapi.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">COMIDA RAPIDA</h5>
                            <div class="card-text">
                                <ul>
                                <p>
                                    La mejor comida rapida, con productos de calidad y a buenos precio, no esperes más,
                                    visitanos. <br>
                                    <br>
                                    ¡Te Esperamos!
                                </p>
                                <hr>
                                 <a href="#" class="btnCO ver">
                                <div id="container">
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorCO">
                    <div class="ventanaCO ventana-cerrarCO">
                        <p class="cerrarCO">X</p>
                        <div class="galeria-titulo">
                            <h2>Comida Rapida</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php 
                                   include "Confing/conexion.php";

                                   $query = mysqli_query($conection,"SELECT * FROM producto_rapida");
                                   mysqli_close($conection);
                                   $result = mysqli_num_rows($query);
                                   if ($result > 0) {
                                       while ($data = mysqli_fetch_array($query)) {
                                           if ($data['imagen_p'] != 'img_producto.png') {
                                               $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                           }else{
                                               $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                           }
                                   ?>
                               <div class="imagen">
                                   <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                   <div class="overlay">
                                       <h3><?php echo $data["nombre_p"]?></h3>
                                       <h4><?php echo '$'.$data["precio_p"]?></h4>
                                       <p><i><?php echo $data["descripcion_P"]?></i></p>
                                   </div>
                               </div>

                               <?php
                                       }
                                   }

                               ?>
                               </div>
                           </div>
                               <div class="paginador">
                                   <p></p>
                               </div>
                       </div>
                   </div>
                
                <div class="col-lg-4 col-md-6 ">
                    <div class="card">
                        <img src="librerias/public/img/sopas.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">SOPAS</h5>
                            <div class="card-text">
                                <ul>
                                    <p>
                                     En Picar Pollo te ofrecemos las mejores sopas, con los mejores sabores tradicionales y a un buen precio. <br>
                                    <br>
                                    ¡Te Esperamos!
                                    </p>
                                <hr>
                                 <a href="#" class="btnSO ver">
                                <div id="container" >
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a> 
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorSO">
                    <div class="ventanaSO ventana-cerrarSO">
                        <p class="cerrarSO">X</p>
                        <div class="galeria-titulo">
                            <h2>Sopas</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php 
                                    include "Confing/conexion.php";

                                    $query = mysqli_query($conection,"SELECT * FROM producto_Sopas");
                                    mysqli_close($conection);
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            if ($data['imagen_p'] != 'img_producto.png') {
                                                $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                            }else{
                                                $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                            }
                                    ?>
                                <div class="imagen">
                                    <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                    <div class="overlay">
                                        <h3><?php echo $data["nombre_p"]?></h3>
                                        <h4><?php echo '$'.$data["precio_p"]?></h4>
                                        <p><i><?php echo $data["descripcion_P"]?></i></p>
                                    </div>
                                </div>
 
                                <?php
                                        }
                                    }
 
                                ?>
                                </div>
                            </div>
                            <div class="paginador">
                                        <p></p>
                                    </div>
                            </div>
                        </div>
                    </ul>
                </div>
                    
                    <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="librerias/public/img/jugos.jpg" style="height: 188px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JUGOS NATURALES</h5>
                            <div class="card-text">
                                <ul>
                                    <p>
                                     ¿Tienes sed y no quieres nada artificial?, En Picar Pollo tenemos las mejores
                                     bebidas natrales en agua y leche. <br>
                                    <br>
                                    ¡Te Esperamos!
                                    </p>
                                <hr>
                                 <a href="#" class="btnJU ver">
                                <div id="container">
                                <div id="button-container">
                                    <div id="button" class="green" style="position:relative;left:-10%;top:85% ;">
                                        <h3 style="color:white;padding:2px;text-align:center;">Ver</h3>
                                    </div>
                                </div>
                                </div>
                                    </a> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ventana-contenedorJU">
                    <div class="ventanaJU ventana-cerrarJU">
                        <p class="cerrarJU">X</p>
                        <div class="galeria-titulo">
                            <h2>Jugos Naturales</h2>
                        </div>
                            <div class="galeria">
                                <div class="linea"></div>
                                    <div class="contenedor-imagenes">

                                <?php 
                                    include "Confing/conexion.php";

                                    $query = mysqli_query($conection,"SELECT * FROM producto_Jugos");
                                    mysqli_close($conection);
                                    $result = mysqli_num_rows($query);
                                    if ($result > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            if ($data['imagen_p'] != 'img_producto.png') {
                                                $foto = 'Views/Pages/Registrar/img/uploads/'.$data['imagen_p'];
                                            }else{
                                                $foto = 'Views/Pages/Registrar/img/'.$data['imagen_p'];
                                            }
                                    ?>
                                <div class="imagen">
                                        <img src="<?php echo $foto; ?>" alt="<?php echo $data["nombre_p"]?>">
                                        <div class="overlay">
                                            <h3><?php echo $data["nombre_p"]?></h3>
                                            <h4><?php echo '$'.$data["precio_p"]?></h4>
                                            <p><i><?php echo $data["descripcion_P"]?></i></p>
                                        </div>
                                    </div>

                                    <?php
                                            }
                                        }

                                    ?>
                                    </div>
                                </div>
                                    <div class="paginador">
                                        <p></p>
                                    </div>
                            </div>
                        </div>
                        

        </section>
    </div>

    <div id="nosotros">
        <section class="cover ">            
            <div class="description">
                <h2 style="text-align: center;">¿Quiénes somos?</h2>
                <p style="text-align: justify;">
                   Somos un restaurante familiar que lleva alrededor de 7 años en el mercado, 
                   caracterizados por abarcar un amplio catálogo de comidade todo tipo, 
                   acompañados de un servicio excepcional. <br><br>
                   Contamos con tres apartados independientes los cuales son asadero, restaurante y fruteria,
                   conformados por un gran espacio para distintos eventos y donde podrán encontrar un 
                   amplio personal dispuesto a ayudar y servir en lo que necesite.</p> 
            </div>
        </section>
    </div>

    <footer  id="contacto">
    <h2>Contacto</h2>
        <div class="row">
            
            <div class="col-sm-12 col-md-6">
                <p><span class="fas fa-map-marker-alt"></span><a href="https://www.google.es/maps/place/Santa+Librada,+Usme,+Bogot%C3%A1/@4.5145252,-74.1160095,3a,75y,21.56h,90.51t/data=!3m6!1e1!3m4!1sFa8wyGAuIr7x5USt64RFhQ!2e0!7i13312!8i6656!4m13!1m7!3m6!1s0x8e3fa22e5c55547f:0xf58271d7a8e3b533!2sSanta+Librada,+Usme,+Bogot%C3%A1!3b1!8m2!3d4.5150005!4d-74.1144529!3m4!1s0x8e3fa22e5c55547f:0xf58271d7a8e3b533!8m2!3d4.5150005!4d-74.1144529">&nbsp; 0 Este1 Cl. 75 Sur, Bogotá</a></p>
                <p><span class="fas fa-phone"></span> 320-996-5992</a></p>
            </div>
            <div class="col-sm-12 col-md-6">
                <p><span class="fas fa-clock"></span> Lu-Vi 11:00 AM - 10:00 PM | Sa-Do 11:00 AM - 11:00 PM</p>
                <p><span class="fas fa-envelope"></span>asaderopicarpollo@gmail.com</a></p>
            </div>
            <div class="col col-12 copy">Copyright © 2020 &nbsp; - <a href="https://www.facebook.com/cristiandanilo.avilaramirez" target="_blank">&nbsp; Cristian Avila | 
            </a><a href="https://www.facebook.com/jaider.morenotraslavina" target="_blank">&nbsp; Jaider Moreno | 
            </a>  <a href="https://www.facebook.com/profile.php?id=100022017933369" target="_blank">&nbsp; Kevin Jimenez</a>
        </div>   
        </div>    
    </footer>

    <script src="librerias/public/js/main.js"></script>

</body>
</html>