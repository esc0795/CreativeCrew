<?php
/* Smarty version 4.3.0, created on 2023-03-20 04:28:53
  from 'C:\xampp\htdocs\CreativeCrew\view\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6417d2f5ab9103_81249362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfaacdc5eebb3908183d3035e4f43389c38aaa09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CreativeCrew\\view\\templates\\contact.tpl',
      1 => 1679282924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6417d2f5ab9103_81249362 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title>Tech Crew©</title>
  <link rel="icon" type="image/png" href="graphics/TC.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  @import url("css/styleMainPage.css");
</style>
</head>
<body>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <strong><p id="frase1" style="margin-left: 520px; width: 350px" class="maquina-escribir" style="width:650px; margin-left:450px">&gt;&nbsp;Contacto_</p></strong>
  <div class="container">
    <form method="post" action="contact.php">
      <input type="hidden"  name="accion" value="ingresar_contacto">
      <strong><label for="fname">Nombre:</label></strong>
      <input style="font-family: calibri" type="text" id="fname" name="txtNombre" placeholder="">

      <strong><label for="lname">Apellido:</label></strong>
      <input style="font-family: calibri" type="text" id="lname" name="txtApellido" placeholder="">

      <strong><label for="email">Email:</label></strong>
      <input style="font-family: calibri" type="text" id="email" name="txtEmail" placeholder="">

      <strong><label for="subject">Asunto:</label></strong>
      <textarea style="font-family: calibri" id="subject" name="txtAsunto" placeholder="Escribe algo.." style="height:300px"></textarea>

      <strong><input type="submit" id="btnEnvCon" onclick="alert('Informacion Ingresada')" name="" value="Enviar"></strong>
    </form>
  </div>

</body>
</html>
<?php }
}
