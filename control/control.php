<?php

require_once "libs/smarty_4_3_0/config_smarty.php";

class control{
    private $obj_ratonesColoraos;
    private $nombreApp;

    public function __construct(){
      $this->nombreApp = "Ratones Coloraos";
      $this->obj_ratonesColoraos = new config_smarty();
      $this->objModel  = null;
    }

    public function principalScreen() {
      $this->obj_ratonesColoraos->setDisplay("principal_screen.tpl");
    }

    public function gestor_solicitudes(){}
    public function validar_inactividad(){}
}
?>
