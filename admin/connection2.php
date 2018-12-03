<?php
  class AdminGall_Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=gar_gallery', 'andyguppy', 'np683618d', $pdo_options);
      }
      return self::$instance;
    }
  }
?>