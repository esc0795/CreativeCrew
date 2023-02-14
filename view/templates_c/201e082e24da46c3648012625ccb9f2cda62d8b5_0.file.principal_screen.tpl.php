<?php
/* Smarty version 4.3.0, created on 2023-02-14 22:36:53
  from 'C:\xampp\htdocs\RatonesColoraos\view\templates\principal_screen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ebfef5052e87_87886706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '201e082e24da46c3648012625ccb9f2cda62d8b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RatonesColoraos\\view\\templates\\principal_screen.tpl',
      1 => 1676410611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ebfef5052e87_87886706 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<style>

body{
  background-color: black;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #3D3D3E;
  opacity: 95%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  font-family: "Century Gothic";
  text-align: center;
  padding: 16px 99.8px;
  text-decoration: none;
}

li a:hover {
  background-color: #A52121;
  color: black;
  opacity: 80%;
}

.fotoPrin {
  opacity: 98%;
  height: 250px;
  margin-top: 35px;
  border-radius: 50px;
}

.header {
  width:30em;
  height:17em;
  padding-left: 425px;
  margin-bottom: 15px;
}

.f1 {
  font-family: "Century Gothic";
  color: white;
  padding-top: 300px;
  padding-left: 575px;
}

#tickets{
  text-decoration: none;
  font-family: "Century Gothic";
  color: white;
  border-style: solid;
}

.btnTickets {
  background-color: #232929;
  height: 40px;
  width: 75px;
  border-radius: 10px;
  color: white;
}

.btnTickets:hover {
  background-color: #A52121;
  color: black;
}

</style>
</head>
<body>
  <div class="header">
    <img class="" src="graphics/RCH.png" alt="">
  </div>
  <ul id="menu">
    <li><a href="">Soundcloud</a></li>
    <li><a href="">Twitter</a></li>
    <li><a href="">Instagram</a></li>
    <li><a href="">YouTube</a></li>
    <li><a href="">TikTok</a></li>
  </ul>
  <div class="fotoPrin">
    <center><img src="graphics/envivo.jpg" alt=""></center>
  </div>
  <br>
  <div class="f1">
      <h3>Jazz Café Escazú</h3>
      <h5>Marzo 3, 2023 - 8pm</h5>
      <button class="btnTickets" type="button" name="button">Tickets</button>

      <h3>El Observatorio</h3>
      <h5>Marzo 15, 2023 - 8pm</h5>
      <button  class="btnTickets" type="button" name="button">Tickets</button>

      <h3>Parque Viva</h3>
      <h5>Marzo 10, 2023 - 8pm</h5>
      <button  class="btnTickets" type="button" name="button">Tickets</button>
  </div>
</body>
</html>
<?php }
}
