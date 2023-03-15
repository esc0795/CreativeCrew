<?php

require_once "control/control.php";

$objControl = new control();// instanciacion( instancia=objControl, new crea objetos, control() es el contructor de clase control)
$objControl->displayHeader();
$objControl->displayPodcast();
$objControl->displayFooter();

//Consumir API de Soundcloud
$track_id = 'hyshopd154aDFD';
$client_id = 'enoc-sibaja';
$url = 'https://api.soundcloud.com/tracks/'.$track_id.'.json?client_id='.$client_id;
?>
