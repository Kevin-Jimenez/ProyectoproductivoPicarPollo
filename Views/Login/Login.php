<?php 

    if (!empty($_SESSION['nombre'])) {
        if ($_SESSION['rol']  == 1 ) {
          header('location: ../../Views/');
      }else if ($_SESSION['rol'] == 2 ){
        header('location: ../../Views/pages/Mesero');
      }
    }
    


?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Iniciar Sesion</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Costic styles -->
  <link href="../../librerias/assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link  rel="icon"   href="../../librerias/public/img/logo.jpg" type="image/jpg" > 
</head>

<body class="ms-body ms-primary-theme ms-logged-out">
 
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
  <main class="body-content">
    <div class="ms-content-wrapper ms-auth">
      <div class="ms-auth-container">
        <div class="ms-auth-col">
          <div class="ms-auth-bg">
          </div>
        </div>
        <div class="image">

        </div>
          
        
        <div class="ms-auth-col">
          <div class="ms-auth-form">
            <form class="needs-validation" novalidate="" method="POST" action="../../Controller/Login/LoginController.php" ><br>
              <h3>Iniciar Sesion</h3>
              <br>
              <div class="mb-3">
                <label for="validationCustom08" style="font-size:12px;"><b>Correo electronico</b></label>
                <div class="input-group">
                  <input type="hidden" name="action" value="login">
                  <input type="email" name="email" class="form-control" id="validationCustom08" placeholder="ejemplo@gmail.com" required="">
                  <div class="invalid-feedback">Ingreses un correo electronico valido.</div>
                </div>
              </div>
              <div class="mb-2">
                <label for="validationCustom09" style="font-size:12px;" ><b>Contraseña</b></label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control" id="validationCustom09" placeholder="Contraseña" required="">
                  <div class="invalid-feedback">Ingese una contraseña valida.</div>
                </div>
              </div>
              <button class="btn btn-primary mt-4 d-block w-100" type="submit">Ingresar</button><br>
              <a href="../../Views/Login/recuperar.php">¿ Olvidaste tu contraseña ?</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot Password Modal -->
    <!--  -->
  </main>
  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../../librerias/assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../librerias/assets/js/popper.min.js"></script>
  <script src="../../librerias/assets/js/bootstrap.min.js"></script>
  <script src="../../librerias/assets/js/perfect-scrollbar.js">
  </script>
  <script src="../../librerias/assets/js/jquery-ui.min.js">
  </script>
  <!-- Global Required Scripts End -->
  <!-- Costic core JavaScript -->
  <script src="../../librerias/assets/js/framework.js"></script>
  <!-- Settings -->
  <script src="../../librerias/assets/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/prebuilt-pages/default-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:14:06 GMT -->
</html>