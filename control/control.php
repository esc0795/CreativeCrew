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

    public function gestor_solicitudes(){
      if (isset($_REQUEST['accion'])) {
        $accion = $_REQUEST['accion'];

        switch($accion) {
          case 'ingresar_propuesta':
              //$this->// TODO: ingresar metodo de ingreso a BD
            break;
        }
      }

    }

    public function ctl_ingresar_propuesta(){
      $obj_prop = new model_propuesta_tema();
      $obj_prop->set_tema($_REQUEST['txtTema']);
      $obj_prop->set_usuario($_REQUEST['email']);

      $req = $this->objModel->_getTopic($obj_prop);

      if ($req->get_tema()!=null) {
        echo "La informacion fue ingresada";
      }
    }

    public function validar_inactividad(){}
}
?>
