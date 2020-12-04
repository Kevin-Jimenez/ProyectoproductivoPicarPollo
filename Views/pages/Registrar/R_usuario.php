<?php

    require '../../../Controller/Login/StarterController.php';
    $is = new StarterController();

    if (empty($_SESSION['nombre'])) {
      header("location: ../../Login/LoginController.php?action=login");
    }
    if ($_SESSION['rol'] == 2 ){
      header('location: ../Mesero');
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Registar Usuario | Picar Pollo </title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../../../librerias/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="../../../librerias/assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="../../../librerias/assets/css/slick.css" rel="stylesheet">
  <link href="../../../librerias/assets/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="../../../librerias/assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="../../../librerias/public/img/logo.jpg">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="../../index.php">
        <img style="width: 100%; height: 100%;"src="../../../librerias/assets/img/costic/pollo.png" alt="">
        <p style="color:grey;text-align: center;"><br> <i>Administrador</i> </p>
      </a>
    </div>
  
   <!-- Navigation -->
   <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"> <span><i class="material-icons fs-16">dashboard</i>Inicio</span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="../../index.php">Administracion</a>
          </li>
        </ul>
      </li>
      <!-- /Dashboard -->
      
      <!-- Invoice -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="invoice"> <span><i class="material-icons">storage</i>Lista de usuarios </span>
        </a>
        <ul id="invoice" class="collapse" aria-labelledby="invoice" data-parent="#side-nav-accordion">
          <li> <a href="../Administradores/listar_adm.php">Administradores</a>
          </li>
          <li> <a href="../Administradores/listar_emp.php">Empleados</a>
          </li>
        </ul>
      </li>
      <!-- Invoice end -->
      <!-- product -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="material-icons">add</i>Registrar</span>
        </a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
          <li> <a href="../Registrar/R_usuario.php">Registrar Usuario</a>
          </li>
          <li> <a href="../Registrar/R_producto.php">Registrar Producto</a>
          </li>
          <li> <a href="../Registrar/R_mesa.php">Registrar Mesa</a>
          </li>
        </ul>
      </li>
      <!-- product end -->
       <!-- customers-->
       <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer"> <span><i class="material-icons">filter_list</i>Listados  </span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li> <a href="../Lista/lista_u.php">Lista de usuarios</a>
          </li>
          <li> <a href="../Lista/lista_p.php">Lista de productos</a>
          </li>
          <li> <a href="../Lista/lista_v.php">Lista de ventas</a>
          </li>
          <li> <a href="../Lista/lista_m.php">Lista de mesas</a>
          </li>
        </ul>
      </li>
      <!-- Customers  end -->
    </ul>
  </aside>
 
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index.php"><img src="../../../librerias/assets/img/costic/costic-logo-84x41.png" alt="logo"> </a>
      </div>
      
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
         <!-- <p style="color:grey;">Administrador </p>  -->
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="ms-user-img ms-img-round float-right" src="../../../librerias/assets/img/costic/customer-6.jpg" alt="Administrador">
            <h6 class="dropdown-header ms-inline m-0" style="padding-top: 13px;"><span class="text-disabled"><?php echo $_SESSION['user'];?> </span></h6>
          </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="../Perfil/user-profile.php"> <span><i class="flaticon-user mr-2"></i> Perfil</span>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../../../Models/Salir.php"> <span><i class="flaticon-shut-down mr-2"></i> Cerrar Sesion</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options"> <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
    </nav>
    <div class="ms-content-wrapper">
      <div class="row">
        
        
        <div class="col-xl-12 col-md-6">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">

            <?php
            include "../../../Confing/conexion.php";

       $charset = "abcdefghijklmnoprstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

            $cad = "";
            for ($i=0; $i <5 ; $i++) { 
                $cad .= substr($charset,rand(0,61),1);
            }

    if (!empty($_POST)) {
        $alert='';
        if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['usuario']) || empty($_POST['rol']) || empty($_POST['correo']) || empty($_POST['contrasena'])) {

            $alert='<p class="msg_error">Todos los campos son obligatorios</p>';
        }else {

            

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $documento = $_POST['documento'];
            $telefono = $_POST['telefono'];
            $user = $_POST['usuario'];
            $correo = $_POST['correo'];
            $contrasena = md5($_POST['contrasena']);
            $rol = $_POST['rol'];

            $query_c = mysqli_query($conection,"SELECT id_usuario FROM usuario WHERE usuario = '$user'");
            
            $result_c = mysqli_fetch_array($query_c);

            $query_e = mysqli_query($conection,"SELECT * FROM empleado WHERE documento_e = '$documento'" );
            $result_e = mysqli_fetch_array($query_e);
            $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' OR correo_u = '$correo'" );
            
            $result = mysqli_fetch_array($query);
            
                if ($result_e > 0){
                    $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i>  El documento ya se registro. </i></b></p>';
                }elseif ($result > 0) {
                    $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px;"><b><i>  El usuario o el correo ya existe con ya existe. </i></b></p>';
                }else {

                    $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre_u,usuario,rol,contrasena,correo_u) 
                                                                        VALUES('$nombre','$user','$rol','$contrasena','$correo')");
                    $ultimo_id = mysqli_insert_id($conection);
                    $result = mysqli_fetch_array($query);

                    $query_insert_c = mysqli_query($conection,"INSERT INTO empleado (apellido_e,documento_e,telefono_e,id_usuario) 
                                                                            VALUES('$apellido','$documento','$telefono','$ultimo_id')");
                    if($rol==1){
                        $rol= 'Administrador';
                    }elseif($rol==2){
                        $rol= 'Empleado';
                    }else{
                        echo "<script>
                           Swal.fire({
                               html: '<b><i>Error </i></b>',
                               icon: 'error',
                               timer: 5000,
                               timerProgressBar: true,
                           });
                         </script>";
                    }
                    if ($query_insert && $query_insert_c) {


                    $asunto = 'Usuario Registrado';
                    $nombre1 = 'Restaurante Asadero Picar Pollo';
                    $emisor = 'asaderopicarpollo@gmail.com';
                    $h1 = '¡Bienvenido!';
                    $receptor = $correo;
                    $mensaje = 'Buen dia apreciado '.$rol.' <br>
                                 <br>
                                 Le informamos que el usuario a nombre de <strong>'.$nombre.' '.$apellido.'</strong> se registro corectamente y se encuentra en estado activo,'.
                                ' recuerda que el usuario es tu correo  <strong>' .$correo.'</strong>  y la contraseña es  <strong>'.$_POST['contrasena'].'</strong> Bienvenido al restaurante <br>
                                 <br>
                                 <br>
                                <strong>Gracias!...</strong>';
                
                       $cuerpo = '
                       <!DOCTYPE html>
                       <html>
                       <head>
                        <title></title>
                       </head>
                       <body">
                       <h1 style="text-align:center; font-size:30px; color:red;">'.$h1.' </h1>
                       <hr style="background-color:red;width:550px;height:3px;" >
                       <div class="mensaje">
                       <div class="mfinal" style="width:650px;margin:auto;border:2px solid black;border-radius:10px;padding:10px;margin-top:20px;">
                       '.$mensaje.'
                       </div>
                       </div>
                       </body>
                       </html>';
               
                       $headers  = "MIME-Version: 1.0\r\n";
                       $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
               
                       //dirección del remitente
                       $headers .= "From: ".$nombre1." <".$emisor.">\r\n";
                       $headers .= "Reply-To: ".$emisor."\r\n";
               
                   
                       if(mail($receptor,$asunto,$cuerpo,$headers)){
                           echo "<script>
                                       Swal.fire({
                                           html: '<b><i>Notificacion enviada exitosamente</i></b>',
                                           icon: 'success',
                                           timer: 5000,
                                           timerProgressBar: true,
                                       });
                                 </script>";
                       }else{
                           echo "<script>
                           Swal.fire({
                               html: '<b><i>Error al Notificar</i></b>',
                               icon: 'error',
                               timer: 5000,
                               timerProgressBar: true,
                           });
                         </script>";
                       }

                        $alert='<p style="color: rgba(50, 202, 50, 0.87);font-size: 15px; "><b><i>  Usuario ingresado correctamente e notificado.</b></i>  </p>';
                    }else {
                        $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i>  ERROR al ingresar el usuario. </b></i>  </p>';
                    }
            }
        }
        mysqli_close($conection);
    }
?>

    <section id="container">
        <div class="form_register">
            <div class="page-header">
                <strong style="font-size:40px;">Registrar Usuario</strong>
            </div>
            <div class="Aregistro">
            
                <?php echo isset($alert) ? $alert : '';?>
 
            </div>

            <form class="needs-validation clearfix" novalidate action="" method="post" autocomplete="off">
            
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre">Nombre</label>
                        <div class="input-group">
                        <input type="text" pattern="[A-Z a-z]+" title="Digite solo Letras" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo" required="">
                    <div class="invalid-feedback">Complete el campo con solo letras.</div>
                                </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="apellido">Apellido</label>
                        <div class="input-group">
                        <input type="text" pattern="[A-Z a-z]+" title="Digite solo Letras" class="form-control" name="apellido" id="apellido" placeholder="Apellido completo" required="">
                    <div class="invalid-feedback">Complete el campo con solo letras.</div>
                                </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="telefono">Telefono</label>
                      <div class="input-group">
                        <input type="text" pattern="[0-9]+" title="Digite solo Numeros" class="form-control" name="telefono" id="telefono" placeholder="N° de telefono" required="">
                     <div class="invalid-feedback">Complete el campo con solo numeros.</div>
                                </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="documento">Documento</label>
<div class="input-group">
                        <input type="text" pattern="[0-9]+"   title="Digite solo Numeros" class="form-control" name="documento" id="documento" placeholder="N° de documento" required="">
                    <div class="invalid-feedback">Complete el campo con solo numeros.</div>
                                </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="usuario">Usuario</label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required="">
                    <div class="invalid-feedback">Complete el campo con solo numeros.</div>
                                </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="correo">Correo</label>
<div class="input-group">
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo@gmail.com" required="">
                    <div class="invalid-feedback">Ingreses un correo electronico valido.</div>
                </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="contrasena">Contraseña</label>
<div class="input-group">
                        <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" value="<?php echo $cad; ?>" required="" readonly>
                    <div class="invalid-feedback">Ingese una contraseña valida.</div>
                </div>
                    
                </div>
                    <div class="col-md-6 mb-3">
                        <label for="rol">Cargo del Usuario</label>

                        <?php 
                            include "../../../Confing/conexion.php";
                                $query_rol = mysqli_query($conection,"SELECT * FROM rol WHERE (id_rol = 1) OR (id_rol = 2)");
                                mysqli_close($conection);
                                $result_rol = mysqli_num_rows($query_rol);
                        ?>
<div class="input-group">
                            <select name="rol" class="form-control" id="rol">
                        <?php
                            if ($result_rol > 0) { 
                                while ($rol = mysqli_fetch_array($query_rol)) {
                        ?>
                            <option value="<?php echo $rol["id_rol"]; ?>"><?php echo $rol["rol"]; ?></option>
                        <?php
                                }
                             }
                        ?>
                            </select>
                            <div class="invalid-feedback">Complete el campo.</div>
                </div>
                </div>
                </div>
                
                <div class="form-row">
                    
                    <input type="submit" class="btn btn-primary d-block" value="Crear Usuario"  >
                    
                </div>
            </form>
        </div>
                </div>
            </div>
          </div>
        </div>

        
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">
    
 <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../../../librerias/assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../../librerias/assets/js/popper.min.js"></script>
  <script src="../../../librerias/assets/js/bootstrap.min.js"></script>
  <script src="../../../librerias/assets/js/perfect-scrollbar.js">
  </script>
  <script src="../../../librerias/assets/js/jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Page Specific Scripts Start -->

  <script src="../../../librerias/assets/js/Chart.bundle.min.js">
  </script>
  <script src="../../../librerias/assets/js/widgets.js"> </script>
  <script src="../../../librerias/assets/js/clients.js"> </script>
  <script src="../../../librerias/assets/js/Chart.Financial.js"> </script>
  <script src="../../../librerias/assets/js/d3.v3.min.js">
  </script>
  <script src="../../../librerias/assets/js/topojson.v1.min.js">
  </script>
  <script src="../../../librerias/assets/js/datatables.min.js">
  </script>
  <script src="../../../librerias/assets/js/data-tables.js">
  </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="../../../librerias/assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="../../../librerias/assets/js/settings.js"></script>
</body>



<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:05:48 GMT -->
</html>
