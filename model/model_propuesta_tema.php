<?php
class model_propuesta_tema{
  private $tema;
  private $usuario;

  public function __construct(){
    
  }

  public function get_usuario(){
    return $this->usuario;
  }

  public function set_usuario($us){
    $this->usuario =$us;
  }

  public function get_tema(){
    return $this->tema;
  }

  public function set_tema($tm){
    $this->tema =$tm;
  }
}
 ?>
