<?php

  class UserController {
    
        public function index() {

      require_once('views/admin/index.php');
    }


      Private function startsession($userID, $Rank){
 
        $_SESSION["user_id"] = $userID;
        $_SESSION["user_rank"] = $Rank;

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
            echo $user[5] . " -- <br>";
            if($user[5] == 'Admin' ){
             self::startsession($user[0] , $user[5]);
              // ***********************************************************************
              // Dirty Method of changing base URL to Admin section, need to revisit
              $URL = $_SERVER['SCRIPT_URI'] .'/admin/index.php';
              if( headers_sent() ) { echo("<script>location.href='$URL'</script>"); }
                else { header("Location: $URL"); }
              // ***********************************************************************
            }elseif($user[5] == 'User' ){
              self::startsession($user[0] , $user[5]);
              require_once('views/admin/index.php');


            }else{
              echo "Invalid Username or Password <br><br>";
              require_once('views/admin/index.php');
            }
            }
            else {
              die('Username is required');
            }
        
      }


  }
?>