<?php

    require '../../../../Controller/Login/StarterController.php';
    $is = new StarterController();

    if (empty($_SESSION['nombre'])) {
      header("location: ../../../../Controller/Login/LoginController.php?action=login");
    }
    if ($_SESSION['rol'] == 1 ){
      header('location: ../../../');
    }
       include "../../../../Confing/conexion.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Perfil MESERO | Picar Pollo </title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="../../../../librerias/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="../../../../librerias/assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="../../../../librerias/assets/css/slick.css" rel="stylesheet">
  <link href="../../../../librerias/assets/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="../../../../librerias/assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="../../../../librerias/public/img/logo.jpg">
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
      <a class="pl-0 ml-0 text-center" href="../index.php">
        <img style="width: 100%; height: 100%;"src="../../../../librerias/assets/img/costic/pollo.png" alt="">
        <p style="color:grey;text-align: center;"><br> <i>Mesero</i> </p>
      </a>
    </div>
  
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"> <span><i class="material-icons fs-16">dashboard</i>Inicio</span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="../index.php">Mesero</a>
          </li>
        </ul>
      </li>
      
      <!-- Invoice -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#invoice" aria-expanded="false" aria-controls="invoice"> <span><i class="fas fa-utensils"></i> Lista de usuarios </span>
        </a>
        <ul id="invoice" class="collapse" aria-labelledby="invoice" data-parent="#side-nav-accordion">
          <li> <a href="../../mesasdis/mesas">Mesas</a>
          </li>
        </ul>
      </li>
      
      <!-- Customers  end -->
      <!-- orders -->
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
      </div>
      
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
         <!-- <p style="color:grey;">Administrador </p>  -->
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="ms-user-img ms-img-round float-right" src="../../../../librerias/assets/img/costic/country-5.jpg" alt="Administrador">
            <h6 class="dropdown-header ms-inline m-0" style="padding-top: 13px;"><span class="text-disabled"><?php echo $_SESSION['user'];?> </span></h6>
          </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="Perfil/user-profile.php"> <span><i class="flaticon-user mr-2"></i> Perfil</span>
              </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../../../../Models/Salir.php"> <span><i class="flaticon-shut-down mr-2"></i> Cerrar Sesion</span>
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

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">

      <div class="ms-profile-overview">
        <div class="ms-profile-cover">
          <img class="ms-profile-img" src="../../../../librerias/assets/img/costic/country-5.jpg" alt="people">
          <div class="ms-profile-user-info">
            <h4 class="ms-profile-username text-white"><?php echo $_SESSION['nombre'];?></h4>
            <h2 class="ms-profile-role">Mesero</h2>
          </div>
        </div>
        <div class="tab-content">
          <div class="tab-pane" id="tab1">

          </div>
          <div class="tab-pane" id="tab2">

          </div>
          <div class="tab-pane" id="tab3">

          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-xl-12 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body">
            
            <?php
              include "../../../../Confing/conexion.php";
              if (!empty($_POST)) {
                $alert='';
                if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['telefono']) || empty($_POST['contrasenanueva']) || empty($_POST['contrasenapasada']) || empty($_POST['confirmar'])) {
        
                    $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i>Todos los campos son obligatorios</b></i></p>';
                }else {
        
                    if ($_POST['contrasenanueva'] != $_POST['confirmar']) {
                        $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i>Contraseñas nuevas no coinciden.</b></i> </p>';
                    }else{
        
                        $idusuario = $_POST['idusuario'];
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $telefono = $_POST['telefono'];
                    $user = $_SESSION['user'];
                    $contrasena = md5($_POST['contrasenanueva']);
                    $pass = md5($_POST['contrasenapasada']);
        
                    $query = mysqli_query($conection,"SELECT * FROM usuario WHERE (usuario = '$user' AND contrasena = '$pass')");
                    $result = mysqli_fetch_array($query);
                    
                    if ($result > 0) {
                        
                    $sql_update_e = mysqli_query($conection,"UPDATE empleado SET apellido_e= '$apellido',telefono_e= '$telefono'
                                                                            WHERE id_usuario = $idusuario");
        
                    $sql_update_u = mysqli_query($conection,"UPDATE usuario SET nombre_u= '$nombre',contrasena='$contrasena'
                                                                            WHERE (usuario = '$user' AND id_usuario = $idusuario)");
        
                            if ($sql_update_e && $sql_update_u) {
                                $alert='<p style="color: rgba(50, 202, 50, 0.87);font-size: 15px; "><b><i> Usuario actualizado correctamente.</b></i> </p>';
                            }else {
                                $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i> ERROR al actualizar el usuario.</b></i> </p>';
                            }
                    }else {
                        $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i>La contraseña no es la correcta.</b></i> </p>';
                    }
                    }
        
                    
                }
                mysqli_close($conection);
            }
        
            //Mostrar datos
            include "../../../../Confing/conexion.php";
             $user = $_SESSION['user'];
             $iduser = mysqli_query($conection,"SELECT id_usuario FROM usuario WHERE usuario = '$user'");
        
            $sql = mysqli_query($conection,"SELECT u.id_usuario, u.nombre_u, u.usuario,e.apellido_e,e.telefono_e,u.contrasena
                                            FROM usuario u INNER JOIN empleado e 
                                            ON u.id_usuario = e.id_usuario
                                            WHERE usuario = '$user'");
            $result_sql = mysqli_num_rows($sql);
        
                if ($result_sql > 0) {
                
                    while ($data = mysqli_fetch_array($sql)) {
                        $iduser = $data['id_usuario'];
                        $nombre = $data['nombre_u'];
                        $apellido = $data['apellido_e'];
                        $usuario = $data['usuario'];
                        $telefono = $data['telefono_e'];
        
                    }
                }
        ?>
              
              
                <div class="form_product">
                    <div class="page-header">
                    <strong style="font-size:40px;">Actualizar Perfil</strong>
                    </div>
                    <div class="Aregistro"><?php echo isset($alert) ? $alert : '';?></div>
              <div class="ms-profile-skills">
                
              </div>

              <form class="needs-validation clearfix" novalidate action="" method="post" autocomplete="off">
                <input type="hidden" class="form-control" name="idusuario" value="<?php echo $iduser ?>">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                <label for="nombre">Nombre</label>
<div class="input-group">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo" required=""  value="<?php echo $nombre; ?>">
                <div class="invalid-feedback">Complete el campo</div>
                </div>
                </div>
                    <div class="col-md-6 mb-3">
                <label for="apellido">Apellido</label>
<div class="input-group">
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="apellido completo" value="<?php echo $apellido; ?>" required="">
                <div class="invalid-feedback">Complete el campo</div>
                </div>
                </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                <label for="telefono">Telefono</label>
<div class="input-group">
                <input type="text" pattern="[0-9]+" title="Digite solo Numeros" class="form-control" name="telefono" id="telefono" placeholder="N° de telefono" required="" value="<?php echo $telefono; ?>">
                <div class="invalid-feedback">Complete el campo con solo numeros enteros</div>
                </div>
                </div>
                    <div class="col-md-6 mb-3">
                <label for="usuario">Usuario</label>
<div class="input-group">
                <input type="text" required="" class="form-control" name="usuario" id="usuario" placeholder="Usuario" value="<?php echo $usuario; ?>" readonly>
                <div class="invalid-feedback">Complete el campo</div>
                </div>
                </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">

                <label for="contrasenapasada">Contraseña Pasada</label>
                <div class="input-group">
                <input type="password" required="" class="form-control" name="contrasenapasada" id="contrasenapasada" placeholder="Contraseña Pasada">
                <div class="invalid-feedback">Complete el campo</div>
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="contrasenanueva">Contraseña Nueva</label>
<div class="input-group">
                <input type="password" required="" class="form-control" name="contrasenanueva" id="contrasenanueva" placeholder="Contraseña Nueva">
                <div class="invalid-feedback">Complete el campo</div>
                </div>
                </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                <label for="confirmar">Confirmar Contraseña Nueva</label>
<div class="input-group">
                <input type="password" required="" class="form-control" name="confirmar" id="confirmar" placeholder="confirmar Contraseña Nueva">
                <div class="invalid-feedback">Complete el campo</div>
                </div>
                </div>
                </div>
                
                <input type="submit" class="btn btn-primary d-block" value="Actualizar Usuario"  >
                
            </form>
            </div>

          </div>
        </div>
        

      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="https://kit.fontawesome.com/2754ea4cc7.js" crossorigin="anonymous"></script>
  <!-- Global Required Scripts Start -->
  <script src="../../../../librerias/assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../../../librerias/assets/js/popper.min.js"></script>
  <script src="../../../../librerias/assets/js/bootstrap.min.js"></script>
  <script src="../../../../librerias/assets/js/perfect-scrollbar.js"> </script>
  <script src="../../../../librerias/assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Costic core JavaScript -->
  <script src="../../../../librerias/assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="../../../../librerias/assets/js/settings.js"></script>

</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/prebuilt-pages/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:15:35 GMT -->
</html>
