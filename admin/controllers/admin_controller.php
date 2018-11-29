<?php

  class AdminController {
    
        public function index() {

      require_once('views/admin/index.php');
    }




        public function adminlogin() {
          echo "in admincontroller adminlogin section";
      require_once('views/admin/adminlogin.php');
    }

        public function signup() {
          echo "in admincontroller CreateUser section";

      require_once('views/admin/signup.php');
    }

        public function newuser() {
          echo "in admincontroller newuser section";
          if ( isset($_GET['uname']) ) {
          $username = $_GET['uname'];
          $password = $_GET['psw'];
          $firstname = $_GET['firstName'];
          $lastname = $_GET{'lastName'];
          $emailaddress = $_GET['emailAdd'];
          $rank = $_GET['rank'];
          echo $username . "<br>";
        }
      require_once('views/admin/adminlogin.php');
    }

  }
?>