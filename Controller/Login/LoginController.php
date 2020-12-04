<?php
    require '../../Models/Login/LoginModel.php';
    require 'StarterController.php';
    $ics = new StarterController();

    class   LoginController extends Login{

        public function redirectprincipal(){
            if ($_SESSION['rol'] == 1) {
                header("location: ../../Views");
            }else if ($_SESSION['rol'] == 2) {
                header("location: ../../Views/pages/Mesero");
            }
            
        }

        public function LoginView(){
            require '../../Views/Login/Login.php';
        }

        public function VerifyLogin($email,$password){

            $this->email = $email;
            $this->contrasena = $password;
            $infousuario = $this->SearchUsuarioForEmail();
            foreach ($infousuario as $usuario) {
            if($password == $usuario['contrasena']){
                $_SESSION['nombre'] = $usuario['nombre_u'];
                $_SESSION['user'] = $usuario['usuario'];
                $_SESSION['idUser'] = $usuario['id_usuario'];
                $_SESSION['email'] = $usuario['correo_u'];
                $_SESSION['rol'] = $usuario['rol'];
                $this->redirectprincipal(); 
            }else{
                
                    echo "<script>
                                alert('Correo y contraseña no coenciden');
                                window.location= '../../Views/Login/Login.php'
                    </script>";
            
            }
        }
    }
    }
    $alerta = 0;
    if (isset($_GET['action']) && $_GET['action'] == 'login') {
        $instanciacontrolador = new LoginController();
        $instanciacontrolador->LoginView();
    }

    if (isset($_POST['action']) && $_POST['action'] == 'login') {
        $instanciacontrolador = new LoginController();
        $instanciacontrolador->VerifyLogin($_POST['email'],md5($_POST['password']));
    }

    

?>