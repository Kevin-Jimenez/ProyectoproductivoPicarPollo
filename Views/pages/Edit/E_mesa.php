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
  <title>Actualizar Mesa | Picar Pollo </title>
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
  <link href="../../../librerias/assets/css/photo.css" rel="stylesheet">
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

            if (!empty($_POST)) {
              $alert='';
              if (empty($_POST['numero']) || empty($_POST['espacio']) || empty($_POST['estado'])) {
      
                  $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i>Todos los campos son obligatorios</b></i></p>';
              }else {
      
                  $idusuario = $_POST['idusuario'];
                  $numero = $_POST['numero'];
                  $espacio = $_POST['espacio'];
                  $estado = $_POST['estado'];
      
                      
                  $sql_update = mysqli_query($conection,"UPDATE mesa SET numero_m= '$numero', espacios_m='$espacio',estado='$estado'
                                                                      WHERE id_mesa = $idusuario");
                          
      
                          if ($sql_update) {
                              $alert='<p style="color: rgba(50, 202, 50, 0.87);font-size: 15px; "><b><i>  Mesa se Actualiso corectamente correctamente</b></i></p>';
                          }else {
                              $alert='<p style="color: rgba(202, 55, 50, 0.87);font-size: 15px; "><b><i><p class="msg_error"> ERROR al actualizar  Mesa. </b></i></p>';
                          }
                  
              }
              mysqli_close($conection);
          }
          //Mostrar datos
           include "../../../Confing/conexion.php";
           if(empty($_GET['id'])){
            header('location: lista_usuario.php');
            mysqli_close($conection);
        }
        $iduser = $_GET['id'];
        $sql = mysqli_query($conection,"SELECT *
                                        FROM mesa 
                                        WHERE id_mesa=$iduser");
        mysqli_close($conection);
        $result_sql = mysqli_num_rows($sql);
    
            if ($result_sql == 0) {
                header('location: lista_mesa.php');
            }else {
                $option = '';
                while ($data = mysqli_fetch_array($sql)) {
                    $iduser = $data['id_mesa'];
                    $numero = $data['numero_m'];
                    $espacio = $data['espacios_m'];
                    $estado = $data['estado'];
                    if ($estado == 1) {
                        $option = '<option value="'.$estado.'" select>Disponible</option>';
                    }elseif ($estado == 2) {
                        $option = '<option value="'.$estado.'" select>Ocupado</option>';
                    }else {
                        $option = '<option value="'.$estado.'" select>Fuera de servicio</option>';
                    }
                }
            }
    ?>
        
            <section id="container">
                <div class="form_register">
                    <div class="page-header">
                        <strong style="font-size:40px;">Actualizar Mesa</strong>
                    </div>
                    <div class="Aregistro">
                        <?php echo isset($alert) ? $alert : '';?>
                    </div>
        
                    <form class="needs-validation clearfix" novalidate action="" method="post" autocomplete="off">
                    <input type="hidden" class="form-control" name="idusuario" value="<?php echo $iduser ?>">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre">Numero de mesa</label>
                                <div class="input-group">
                                <input type="number" pattern="[0-9]+" title="Digite solo Numeros" class="form-control" name="numero" id="numero" placeholder="Numero de mesa *" value="<?php echo $numero; ?>" required="">
                  <div class="invalid-feedback">Complete el campo con solo numeros</div>
                </div>
                                
                            </div>
                            <div class="col-md-6 mb-3">
                            <label for="nombre">Espacios disponibles</label>
                      <div class="input-group">
                                <input type="number" pattern="[0-9]+" title="Digite solo Numeros" class="form-control" name="espacio" id="espacio" placeholder="espacio de mesa *"  value="<?php echo $espacio; ?>" required="">
                            <div class="invalid-feedback">Complete el campo con solo numeros</div>
                </div>
                            </div>
                        </div>
        
                       
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="rol">Estado de la mesa</label>
<div class="input-group">
                                    <select name="estado" value="<?php echo $estado ?>" class="form-control" id="rol">
                                <?php echo $option; ?>
                                <option value="1">Disponible</option>
                                <option value="2">Ocupada</option>
                                <option value="3">Fuera de servicio</option>
                                </select>
                                <div class="invalid-feedback">Complete el campo </div>
                </div>
                                    <br>
                                    <br>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="col-md-2 mb-3">
                        <a href="../Lista/lista_m.php"class="btn btn-dark">Cancelar</a>
                    </div>
                    <div class="col-md-2 mb-3">
                      <input type="submit" value="Actualizar Mesa" class="btn btn-primary d-block">
                      </div>
              
                    </form>
        </div>
                </div>

              </form>

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
