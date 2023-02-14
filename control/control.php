<?php

require_once "libs/smarty_4_3_0/config_smarty.php";

class control{


    private $obj_smarty;
    private $objModel;
    private $nombreApp;

    public function __construct(){
      $this->nombreApp = "Sistema UH";
      $this->obj_smarty      = new config_smarty();
      $this->objModel  = null;
    }

    public function saludar(){
      echo "Hola";
    }
    public function gestor_solicitudes(){}
    public function validar_inactividad(){}


}
?>
