<?php 
        $alert = '';
        include "../../Confing/conexion.php";
        $charset = "abcdefghijklmnoprstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";

        $cad = "";
        for ($i=0; $i <5 ; $i++) { 
            $cad .= substr($charset,rand(0,61),1);
        }

if (!empty($_POST)) {
    $alert='';
    if (empty($_POST['email'])) {

    }else {

        $correo = $_POST['email'];
        $contrasena = md5($cad);

        $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' OR correo_u = '$correo'" );
        
        $result = mysqli_fetch_array($query);
            if ($result > 0){
                

                $query_insert = mysqli_query($conection,"UPDATE usuario SET contrasena='$contrasena' WHERE correo_u='$correo'");
                
                if ($query_insert ) {


                $asunto = 'Recuperacion de contraseña';
                $nombre1 = 'Restaurante Asadero Picar Pollo';
                $emisor = 'asaderopicarpollo@gmail.com';
                $h1 = 'Credenciales';
                $receptor = $correo;
                $mensaje = 'Buen dia apreciado Usuario recibimos su peticion acerca de la recuperacion de la contrasena<br>
                             <br>
                            Le recomendamos modificarla al momento de ingresar  en la opcion perfil.<br>'.
                            'CORREO: <strong>' .$correo.'</strong><br>'.
                            'CONTRASEÑA: <strong>' .$cad.'</strong><br>'.'
                             <br>
                             <br>
                            <strong>Te esperamos</strong>';
            
                   $cuerpo = '
                   <!DOCTYPE html>
                   <html>
                   <head>
                    <title></title>
                   </head>
                   <body">
                   <h1 style="text-align:center; font-size:30px;">'.$h1.' </h1>
                   <hr style="background-color:blak;width:550px;height:3px;" >
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

                    $alert='<p style="font-size: 15px; "><b>  Verifica tu correo.</b>  </p>';
                }else {
                    $alert='<p style="font-size: 15px; "><b>  Correo no valido </b> </p>';
                }
        }
    }
    mysqli_close($conection);
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
        <form class="needs-validation" novalidate="" method="POST" action="" ><br>
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
    
          <button class="btn btn-primary mt-4 d-block w-100" type="submit">Ingresar</button><br>
          <a href="Login.php">Ingresar</a><br>
          <?php echo isset($alert) ? $alert : '';?>
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