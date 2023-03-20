<?php

require_once "libs/smarty_4_3_0/config_smarty.php";
require_once "model/model.php";
require_once "model/model_propuesta_tema.php";
require_once "model/model_contacto.php";

class control{
    private $obj_smarty;
    private $nombreApp;
    private $objModel;

    public function __construct(){
      $this->nombreApp = "Tech Crew";
      $this->obj_smarty = new config_smarty();
      $this->objModel  = new model;
    }

    public function principalScreen() {
      $this->obj_smarty->setDisplay("principal_screen.tpl");
    }

    public function displayFooter() {
      $this->obj_smarty->setDisplay("footer.tpl");
    }

    public function displayHeader() {
      $this->obj_smarty->setDisplay("header.tpl");
    }

    public function displayPodcast(){
      $this->obj_smarty->setDisplay("podcast.tpl");
    }

    public function displayContact(){
      $this->obj_smarty->setDisplay("contact.tpl");
    }

    public function gestor_solicitudes(){
      if (isset($_REQUEST['accion'])) {
        $accion = $_REQUEST['accion'];

        switch($accion) {
          case 'ingresar_propuesta':
              $this->ctl_ingresar_propuesta();
            break;
          case 'ingresar_contacto':
              $this->ctl_ingresar_contacto();
            break;
          default:
            return;
            break;
        }
      }

    }

    public function ctl_ingresar_propuesta(){
      $obj_prop = new model_propuesta_tema();
      $obj_prop->set_tema($_POST['txtTema']);
      $obj_prop->set_usuario($_POST['email']);

      $req = $this->objModel->_getTopic($obj_prop);
    }

    public function ctl_ingresar_contacto(){
      $obj_cont = new model_contacto();
      $obj_cont->set_nombre($_POST['txtNombre']);
      $obj_cont->set_apellido($_POST['txtApellido']);
      $obj_cont->set_email($_POST['txtEmail']);
      $obj_cont->set_asunto($_POST['txtAsunto']);

      $req = $this->objModel->_getContacto($obj_cont);
    }

    public function validar_inactividad(){}
}
?>
