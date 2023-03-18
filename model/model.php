<?php
require_once "C:/xampp/htdocs/CreativeCrew/db/db_connection.php";

class model {

  private $config;

  public function __construct() {
    $this->config = new conn();
  }


  public function _getTopic(){
    //Datos enviados en el formulario
    $email = $_POST['email'];
    $tema = $_POST['txtTema'];



    //Query para hacer el Insert.
    $sql = "INSERT INTO propuesta_tema (tema, usuario) VALUES ('$tema', '$email')";

    echo "Email" . $email;

    $this->config->ejecutar($sql);
  }
}

?>
