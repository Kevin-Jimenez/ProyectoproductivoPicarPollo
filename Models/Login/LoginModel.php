<?php

    require '../../Confing/database.php';
    class Login{

        private $db;
        Private $objetoconsulta;

        public function __construct(){

            $this->db = Conectar::conexion();
            $this->objetoconsulta = array();
        }
        
        protected function SearchUsuarioForEmail(){

            $sql = "SELECT * FROM usuario WHERE correo_u='$this->email'";
            $consulta = $this->db->query($sql);
            $result = mysqli_num_rows($consulta);

            if ($result > 0) {
                while ($row = $consulta->fetch_assoc()) {
            
                    $this->objetoconsulta[] = $row;
                    
                }
            
                return $this->objetoconsulta;
            }else{
                header('location:../../Views/Login/Login.php');
            }

                
    
        }
    }
?>