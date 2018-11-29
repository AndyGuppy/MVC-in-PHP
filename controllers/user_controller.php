<?php

  class UserController {
    
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

       public function createuser() {
          if ( isset($_POST['uname']) ) {
          foreach ($_POST as $key) {
            $userdata[] = $key;
          }
          $userdata[]  = "User";
          $user = User::create($userdata);
          }
          else {
            die('Failed to Create User Name');
          }
         require_once('views/admin/index.php');
      }

      public function showuser(){
          if ( isset($_POST['uname']) ) {
            foreach ($_POST as $key) {
              $userdata[] = $key;
            }
            $user = User::validate($userdata);
            if($user == 0 ){
              require_once('../admin/index.php');
            }else{
              echo "Invalid Username or Password <br><br>";
              require_once('../admin/views/index.php');
            }
            }
            else {
              die('Username is required');
            }
        
      }
// Refactored to above
        // public function createuser() {
        //   echo "in admincontroller newuser section";
        //   if ( isset($_POST['uname']) ) {
        //   $username = $_POST['uname'];
        //   $password = $_POST['psw'];
        //   $firstname = $_POST['firstName'];
        //   $lastname = $_POST['lastName'];
        //   $emailaddress = $_POST['emailAdd'];
        //   $rank = "User";

        //   echo "UserID - " . $username . "<br>";
        //   echo "Password - " . $password. "<br>";
        //   echo "Name - " . $firstname . " " . $lastname . "<br>";
        //   echo "Email - " . $emailaddress . "<br>";
        //   echo "Rank - " . $rank . "<br>";

        //   $user = User::create($username, $password, $firstname, $lastname, $emailaddress, $rank);
        //   }
        //   else {
        //     die('Failed to Create username.');
        //   }
          
        


  }
?>