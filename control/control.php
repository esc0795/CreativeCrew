<?php

require_once "libs/smarty_4_3_0/config_smarty.php";

class control{
    private $obj_creativeCrew;
    private $nombreApp;

    public function __construct(){
      $this->nombreApp = "Ratones Coloraos";
      $this->obj_creativeCrew = new config_smarty();
      $this->objModel  = null;
    }

    public function principalScreen() {
      $this->obj_creativeCrew->setDisplay("principal_screen.tpl");
    }

    public function displayFooter() {
      $this->obj_creativeCrew->setDisplay("footer.tpl");
    }

    public function displayHeader() {
      $this->obj_creativeCrew->setDisplay("header.tpl");
    }

    public function displayPodcast(){
      $this->obj_creativeCrew->setDisplay("podcast.tpl");
    }

    public function displayContact(){
      $this->obj_creativeCrew->setDisplay("contact.tpl");
    }

    public function gestor_solicitudes(){}
    public function validar_inactividad(){}
}
?>
