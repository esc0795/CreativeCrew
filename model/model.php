<?php
require_once "db/db_connection.php";

class model {

  private $ins_conexion;

  public function __construct() {
    $this->ins_conexion=new conn();
  }

  public function getNewTopic() {

  }

}

?>
