<?php
class model_contacto{
  private $nombre;
  private $apellido;
  private $email;
  private $asunto;

  public function __construct(){

  }

  public function get_nombre(){
    return $this->nombre;
  }

  public function set_nombre($nm){
    $this->nombre =$nm;
  }

  public function get_apellido(){
    return $this->apellido;
  }

  public function set_apellido($ap){
    $this->apellido =$ap;
  }

  public function get_email(){
    return $this->email;
  }

  public function set_email($em){
    $this->email =$em;
  }

  public function get_asunto(){
    return $this->asunto;
  }

  public function set_asunto($as){
    $this->asunto =$as;
  }
}
 ?>
