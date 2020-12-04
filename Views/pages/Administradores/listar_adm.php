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
  <title>Lista Usiarios | Administradores | Picar Pollo </title>
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
          <li> <a href="listar_adm.php">Administradores</a>
          </li>
          <li> <a href="listar_emp.php">Empleados</a>
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
      </li>
      
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

        <!-- Recent Placed Orders< -->
        <div class="col-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <h6>Administradores</h6>
            </div>
            <div class="ms-panel-body">
              
              <form action="buscar_admin.php" method="get" class="form_search">
                  <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
                  <input  style=" margin-top: -4px;width: 5px;height: 25px;padding: 1px;" type="submit" value="Buscar" class="btn btn-primary ">              </form><br>
              <div class="table-responsive">
                <table id="data-table-5" class="table w-100 thead-primary">
                  <tr>
                  <th>Documento</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Usuario</th>
                  <th>Telefono</th>
                  <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acciones</th>
              </tr>

              <?php
              include "../../../Confing/conexion.php";
               //paginador
               $sql_registe = mysqli_query($conection,"SELECT COUNT(*) AS total_registro, u.rol
                                                                          FROM empleado e INNER JOIN usuario u ON e.id_usuario = u.id_usuario WHERE u.rol = 1 ");
               $result_register = mysqli_fetch_array($sql_registe);
               $total_registro = $result_register['total_registro'];
               
               $por_pagina = 12;
               if (empty($_GET['pagina'])) {
                   $pagina = 1;
               }else {
                   $pagina=$_GET['pagina'];
               }

               $desde = ($pagina-1) * $por_pagina;
               $total_paginas = ceil($total_registro / $por_pagina);

               //  CALL `Select_usuario`(@p0, @p1, @p2, @p3, @p4);

                  $query = mysqli_query($conection,"SELECT * FROM select_adm
                                                          LIMIT $desde,$por_pagina");
                  mysqli_close($conection);
                  $result = mysqli_num_rows($query);
                  if ($result > 0) {
                      while ($data = mysqli_fetch_array($query)) {
                  ?>
                      <tr>
                          <td><?php echo $data["documento_e"]?></td>
                          <td><?php echo $data["nombre_u"]?></td>
                          <td><?php echo $data["apellido_e"]?></td>
                          <td><?php echo $data["usuario"]?></td>
                          <td><?php echo $data["telefono_e"]?></td>
                          <td >
                              <?php if ($data["id_empleado"] !=1) { ?>
                              <a style=" margin-top: -4px;width: 25px;height: 25px;padding: 1px;" href="eliminar_confirmar_adm.php?id=<?php echo $data["id_usuario"]?>" class="btn btn-primary d-block">
                              <i style=" color: #fff;"class="fas fa-trash-alt"></i>
                              </a>
                              <?php } ?>
                          </td>
                      <tr>
              <?php
                      }
                  }

              ?>

              
              </tr>
          </table>
          <div class="paginador">
              <ul>
                  <?php
                      if ($pagina != 1 && $pagina  <= 2) {
                          ?>
                          <li><a href="?pagina=<?php echo $pagina-1;?>"><<</a></li>
                  <?php
                      }
                  ?>
                  <?php
                      if ($pagina != 1 && $pagina  > 2 ) {
                          ?>
                          <li><a href="?pagina=<?php echo 1;?>">|<<</a></li>
                          <li><a href="?pagina=<?php echo $pagina-1;?>"><<</a></li>
                  <?php
                      }
                  ?>
                  
                  <?php
                      for ($i=1; $i <= $total_paginas; $i++) { 
                          if ($i == $pagina) {
                              echo '<li class="pageSelected">'.$i.'</li>';
                          }else {
                              echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                          }
                          
                      }
                  ?>
                  <?php
                      if ($pagina != 1 && $pagina != $total_paginas && $pagina <= ($total_paginas - 1) ) {
                          ?>
                          <li><a href="?pagina=<?php echo $pagina+1;?>">>></a></li>
                          <li><a href="?pagina=<?php echo $total_paginas;?>">>>|</a></li>
                  <?php
                      }
                  ?>
              </div>
            </div>
          </div> 
          </div>
        </div>
        <!-- Recent Orders< -->

        
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist"> 

    </ul>
    
   
  <!-- SCRIPTS -->
  
  <script src="https://kit.fontawesome.com/2754ea4cc7.js" crossorigin="anonymous"></script>
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
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="../../../librerias/assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="../../../librerias/assets/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:05:48 GMT -->
</html>
