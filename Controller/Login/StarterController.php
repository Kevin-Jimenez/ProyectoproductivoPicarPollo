<?php

    class StarterController{

        public function __construct(){

            session_start();
        }

        public function redirect(){
           

            header("location: ../../Controller/Login/LoginController.php?action=login");
        }
    }

?>