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
  <title>Lista Ventas | Administradores | Picar Pollo </title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <h1 class="db-header-title">Reportes de ventas</h1>
        </div>
        <!-- Users by country table -->
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-widget ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Ventas Recientes</h6>
              
              <p>Conoce que ventas ha realizado tu restaurante recientemente</p>

            </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col"># Mesa</th>
                      <th scope="col">Fecha</th>
                      <th scope="col">Hora</th>
                      <th scope="col">Precio</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <?php
                    include "../../../Confing/conexion.php";
                    $query = mysqli_query($conection,"SELECT * FROM venta_recien LIMIT 8");
                    $result = mysqli_num_rows($query);
                    if ($result > 0) {
                        while ($data = mysqli_fetch_array($query)) {

                    ?>
                        <tr>
                          <td><img src="../../../librerias/assets/img/costic/mesa.png" alt="people"><?php echo $data["numero_m"]?></td>
                          <td><?php echo $data["fecha_p"]?></td>
                          <td><?php echo $data["fin_p"]?></td>
                          <td><?php echo '$ '.$data["precio_p"]?></td>
                        </tr>                        
                <?php
                    
                        }
                    }

                ?>
                  </tbody>
                </table>
                
                <a href="../../../Models/reportes/pdf_ventas.php"><button type="button" class="btn btn-primary">Ver listado</button></a>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Users Pie Chart -->
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>Flujo de ventas  </h6>
              <p>Conoce el porcentaje de ventas que se realizan segun el horario</p>
            </div>

            <div class="ms-panel-body">
              <div class="row">
                <div class="col-xl-2 col-md-2">
                  <div class="ms-graph-labels column-direction">
                    
                  </div>
                </div>
                <div class="col-xl-8 col-md-8">
                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                <script src="../../../librerias/Highcharts/code/highcharts.js"></script>
                <script src="../../../librerias/Highcharts/code/modules/exporting.js"></script>
                <script src="../../../librerias/Highcharts/code/modules/export-data.js"></script>
                <script src="../../../librerias/Highcharts/code/modules/accessibility.js"></script>

                <figure class="highcharts-figure">
                <div id="container"></div>
                </figure>

                <script type="text/javascript">
                // Build the chart
                Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: ''
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: false
                            },
                            showInLegend: true
                        }
                    },
                    series: [{
                        name: 'Brands',
                        colorByPoint: true,
                        data: [

                            <?php
                            $sql_m = mysqli_query($conection,"SELECT * FROM `ventas_ma`");
                            $data_m = mysqli_fetch_array($sql_m);
                            $sql_t = mysqli_query($conection,"SELECT * FROM `ventas_ta`");
                            $data_t = mysqli_fetch_array($sql_t);
                            ?>
                        {
                            name: 'Horario Mañana',
                            y: <?php echo  $data_m["ventas_Mañana"];?>,
                            sliced: true
                        }, {
                            name: 'Horario Tarde',
                            y: <?php echo $data_t["ventas_tarde"]?>
                        }]
                    }]
                });
                    </script>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- User Traffic Line Chart -->
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel  ms-facebook-engagements">
            <div class="ms-panel-header">
              <h6>Tiempo Promedio Por Mesa</h6>
              <p>Conoce el tiempo aproximado que duran tus clientes en las mesas para poder controlar tus reservas</p>
            </div>
            <div class="ms-panel-body p-0">
              <ul class="ms-list clearfix">
                <li class="ms-list-item">
                  <div class="d-flex justify-content-between align-items-end">
                    <div class="ms-graph-meta">
                      <?php
                      
                        $sql_m = mysqli_query($conection,"SELECT * FROM `hora`");
                        $data_m = mysqli_fetch_array($sql_m);
                      ?>
                      <h1> <i class="fas fa-clock"></i> <?php echo  $data_m["hours"];?></h1>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- User Traffic Line Chart -->
        <div class="col-xl-6 col-md-12">
          <div class="ms-panel  ms-facebook-engagements">
            <div class="ms-panel-header">
              <h6>Ventas del Mes</h6>
              <p>Conoce las ventas que has generado durante el mes actual</p><br>
            </div>
            <div class="ms-panel-body p-0">
              <ul class="ms-list clearfix">
                <li class="ms-list-item">
                  <div class="d-flex justify-content-between align-items-end">
                    <div class="ms-graph-meta">
                      <?php
                      
                        $sql_mes = mysqli_query($conection,"SELECT * FROM `venta_mes`");
                        $data_mes = mysqli_fetch_array($sql_mes);
                        $mes = $data_mes["mes"];
                        $cantidad = $data_mes["cantidad"];
                        $precio = $data_mes["precio_mes"]; 

                      ?>
                      <h2><i class="fas fa-calendar-alt"></i> <?php echo  $mes;?></h2>
                      <p style="font-size:15px;" class="ms-text-dark"><i><b>Cantidad: <?php echo ' '.$cantidad;?></b></i> </p>
                      <p style="font-size:15px;" class="ms-text-danger"><i><b>Precio: <?php echo  ' $ '.$precio;?></b></i></p>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
  </main>
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
  <script src="../../../librerias/assets/js/client-managemenet.js">
  </script>
  <!-- Page Specific Scripts Finish -->
  <!-- Costic core JavaScript -->
  <script src="../../../librerias/assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="../../../librerias/assets/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/dashboard/client-management.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:14:06 GMT -->
</html>
