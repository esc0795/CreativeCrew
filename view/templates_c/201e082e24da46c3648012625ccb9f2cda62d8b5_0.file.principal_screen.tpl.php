<?php
/* Smarty version 4.3.0, created on 2023-02-15 08:17:26
  from 'C:\xampp\htdocs\RatonesColoraos\view\templates\principal_screen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ec8706113fb3_06301138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '201e082e24da46c3648012625ccb9f2cda62d8b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RatonesColoraos\\view\\templates\\principal_screen.tpl',
      1 => 1676445444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ec8706113fb3_06301138 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title>Ratones Coloraos!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
  background-color: black;
  margin: 0;
}

.mySlides {
  display:none;
  border-radius: 4px;
  opacity: 75%;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
  opacity: 95%;
  position: fixed;
  top: 0;
  width: 100%;
}

li{
  float: left;
}

li a{
  display: block;
  color: white;
  font-family: "Century Gothic";
  text-align: center;
  padding: 16px 83px;
  text-decoration: none;
}

li a:hover{
  background-color: #A52121;
  color: black;
  opacity: 80%;
}

.active{
  position:fixed;
  z-index:1;
}

.header{
  width:30em;
  height:17em;
  padding-left: 445px;
  margin-bottom: 35px;
  padding-top: 60px;
}

.f1{
  font-family: "Century Gothic";
  color: white;
  padding-top: 25px;
  padding-left: 350px;
  width:60%;
  margin-left: 268px;
}

td{
  border-collapse: collapse;
  border-radius: 5px;
  opacity: 85%;
  padding-left: 63px;
}

th{
  text-align: justify;
  padding-left: 79px;
}

table{
  border-collapse: collapse;
  border-radius: 5px;
  opacity: 85%;
  margin-left: 150px;
}

#tickets{
  text-decoration: none;
  font-family: "Century Gothic";
  color: white;
  border-style: solid;
}

#chivosTxt{
  color: white;
  font-family: "Century Gothic";
  padding-top:60px;
  padding-left: 605px;
  opacity: 85%;
}

.btnTickets{
  background-color: #063E05;
  height: 40px;
  width: 95px;
  border-radius: 10px;
  color: white;
}

.btnTickets:hover{
  background-color: #A52121;
  color: black;
}

#footer{
  background-color: #2E5B2D;
  height: 280px;
  opacity: 50%;
  border-style:solid;
  border-radius: 10px;
  margin-top: 35px;
}

.author{
  text-align: center;
  font-family: "Century Gothic";
  font-size: 12px;
  margin-top: 65px;
  color: #EEEEEE;
}

.frase{
  text-align: center;
  font-family: "Century Gothic";
  font-size: 20px;
  margin-top: 20px;
  color: #EEEEEE;
  background-color: #11230F;
}

a{
  text-decoration: none;
  color: white;
}

</style>
</head>
<body>
  <ul class="active">
    <li><a href="">Música</a></li>
    <li><a href="">Twitter</a></li>
    <li><a href="">Instagram</a></li>
    <li><a href="">YouTube</a></li>
    <li><a href="">TikTok</a></li>
    <li><a href="">Contacto</a></li>
  </ul>
  <p>&nbsp;</p>
  <div class="header">
    <img class="" src="graphics/RCH.png" alt="">
  </div>
  <p>&nbsp;</p>
  <h1 id="chivosTxt">Eventos</h1>
  <p>&nbsp;</p>
  <table class="f1">
  <tr >
    <th class="">Lugar</th>
    <th class="">Fecha/Hora</th>
    <th class="">Entradas</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jazz Café Escazú</td>
    <td>Marzo 3, 2023 - 8pm</td>
    <td><button class="btnTickets" type="button" name="button">Comprar</button></td>
  </tr>
  <tr>
    <td>El Observatorio</td>
    <td>Marzo 15, 2023 - 8pm</td>
    <td><button class="btnTickets" type="button" name="button">Comprar</button></td>
  </tr>
  <tr>
    <td>Parque Viva</td>
    <td>Marzo 2, 2023 - 8pm</td>
    <td><button class="btnTickets" type="button" name="button">Comprar</button></td>
  </tr>
  <tr>
    <td>Ferro Chill</td>
    <td>Abril 15, 2023 - 8pm</td>
    <td><button class="btnTickets" type="button" name="button">Comprar</button></td>
  </tr>
  </table>
  <p>&nbsp;</p>
  <div class="w3-content w3-section" style="max-width:500px">
    <img class="mySlides" src="graphics/envivo/im1.jpg" style="width:100%">
    <img class="mySlides" src="graphics/envivo/im2.jpg" style="width:100%">
    <img class="mySlides" src="graphics/envivo/im3.jpg" style="width:100%">
    <img class="mySlides" src="graphics/envivo/im4.jpg" style="width:100%">
  </div>
  <?php echo '<script'; ?>
>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");

      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }

      myIndex++;

      if (myIndex > x.length) {
        myIndex = 1
      }

      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 3000); // Change image every 2 seconds
  }
  <?php echo '</script'; ?>
>
<footer id="footer">
  <p>&nbsp;</p>
  <hr>
  <div class="frase">
    <p>Qué criaturas tan decentes los Ratones Coloraos....</p>
  </div>
  <hr>
  <div class="author">
    <p>Enoc Sibaja Carrion&nbsp;©</p>
    <p><a href="mailto:info@escarrion.com:">info@escarrion.com</a></p>
    <p>2023</p>
  </div>
</footer>
</body>
</html>
<?php }
}
