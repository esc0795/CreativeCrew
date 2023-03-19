<?php
require_once "C:/xampp/htdocs/CreativeCrew/db/db_connection.php";

class model {

  private $config;

  public function __construct() {
    $this->config = new conn();
  }

  public function _getTopic($obj_prop){
    //Datos enviados en el formulario
    $email = $obj_prop->get_usuario();
    $tema = $obj_prop->get_tema();

    //Query para hacer el Insert.
    $sql = "INSERT INTO propuesta_tema(tema, usuario) VALUES ('$tema', '$email')";
    $this->config->ejecutar($sql);

    return $obj_prop;
  }
}

?>
