<?php
  class PagesController {
    public function home() {
      $first_name = 'Test';
      $last_name  = 'User';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>