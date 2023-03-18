<?php
/* Smarty version 4.3.0, created on 2023-03-18 09:33:35
  from 'C:\xampp\htdocs\CreativeCrew\view\templates\principal_screen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6415775f93dad2_59490531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4146080fc39f9fd036f844d33b6d909bcd9738b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CreativeCrew\\view\\templates\\principal_screen.tpl',
      1 => 1679128380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6415775f93dad2_59490531 (Smarty_Internal_Template $_smarty_tpl) {
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
    <strong><p style="width:960px" id="frase1" class="maquina-escribir">&gt;&nbsp;Desarrollo web and Tech Podcast_</p></strong>
    <p>&nbsp;</p>
  <div class="w3-content w3-section" style="width:425px; height:200px">
    <img class="mySlides" src="https://static.wixstatic.com/media/669128_ec1c7a78e9694aec8a07c2e48b292ae1~mv2.gif" alt="" style="width:150%; height:230%">
    <img class="mySlides" src="https://thumbs.gfycat.com/JauntyScrawnyKitten-size_restricted.gif" alt="" style="width:150%; height:230%">
    <img class="mySlides" src="https://i.pinimg.com/originals/cf/76/61/cf76615202726e828bd1d6d1fbf31fef.gif" alt="" style="width:150%; height:230%">
    <img class="mySlides" src="https://s3.amazonaws.com/rtvc-assets-misenal.tv/ms-public/inline-images/2019-Larson-Best-Podcast.gif" alt="" style="width:150%; height:230%">
    <img class="mySlides" src="https://www.softeck.com.mx/wp-content/uploads/2016/07/5.gif" alt="" style="width:150%; height:230%">
    <img class="mySlides" src="https://www.macmillaneducation.es/iberia/wp-content/uploads/2021/02/microanimacion_ondas.gif" alt="" style="width:150%; height:230%">
  </div>
  <p>&nbsp;</p>
  <div class="descTxt">
    <strong><p id="frase2">&gt;&nbsp;Creative Tech Crew_&nbsp;💡</p></strong>
    <hr>
    <p>Tech Crew genera comunidad para evolucionar juntos dentro
      del creciente mundo tecnológico.</p>
    <p><strong>Tech Crew Podcast</strong> es el encargado de orquestar este ecosistema de ideas
    que surgieron desde escenarios cotidianos con los que podemos sentirnos identificados, pero
    este gran ecosistema pretende crear un canal de contenido lleno de soluciones para los
    entuciastas que conforman esta comunidad de creativos.</p>
    <p><strong>Tech Crew Desarrollo Web</strong> es el encargado de ejecutar este ecosistema de ideas
    que fueron compartidas por la comunidad en cada episodio del podcast, es por eso que buscamos tener
    una red de contenido que pueda ser aprovechado también a nivel práctico dentro  del desarrollo web.</p>
    <p></p>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="propTxt">
    <hr>
    <br>
    <strong><p style="margin-left: 450px" id="frase1" class="maquina-escribir">&gt;&nbsp;Proponer un tema_</p></strong>
    <br>
    <form method="post" action="model/model.php">
        <strong><label id="labProp" for="email">Email:</label><br></strong>
        <br>
        <input type="email" id="inputEm" name="email" style="width: 500px; height: 40px"><br>
        <p>&nbsp;</p>
        <strong><label id="labProp" for="tema">Tema:</label><br></strong>
        <br>
        <textarea id="inputTa" name="txtTema" rows="4" cols="50" style="width: 500px"></textarea>
        <br>
        <strong><input type="submit" id="btnProp" name="" value="Enviar"></strong>
    </form>
  </div>
  <div class="video">
    <hr>
    <br>
    <strong><p style="margin-left:100px; width:400px" id="frase1" class="maquina-escribir">&gt;&nbsp;Comunidad_</p></strong>
    <br>
    <iframe id="video1" width="850" height="550"
      src="https://www.youtube.com/embed/M3DO5Zfk4NI">
    </iframe>
  </div>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
