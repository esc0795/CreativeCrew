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

  public function _getContacto($obj_cont){
    $nombre = $obj_cont->get_nombre();
    $apellido = $obj_cont->get_apellido();
    $email = $obj_cont->get_email();
    $asunto = $obj_cont->get_asunto();

    //Query para hacer el Insert
    $sql = "INSERT INTO contacto(nombre, apellido, email, asunto) VALUES ('$nombre', '$apellido', '$email', '$asunto')";
    $this->config->ejecutar($sql);

    return $obj_cont;
  }
}

?>
