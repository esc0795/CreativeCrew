<?php

require_once "control/control.php";

$objControl = new control();// instanciacion( instancia=objControl, new crea objetos, control() es el contructor de clase control)
$objControl->displayHeader();
$objControl->principalScreen();
$objControl->displayFooter();
$objControl->gestor_solicitudes();
?>
