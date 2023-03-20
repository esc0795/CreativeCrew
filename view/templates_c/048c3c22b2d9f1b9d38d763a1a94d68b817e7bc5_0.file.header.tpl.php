<?php
/* Smarty version 4.3.0, created on 2023-03-20 05:04:28
  from 'C:\xampp\htdocs\CreativeCrew\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6417db4cbc90d5_31063851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '048c3c22b2d9f1b9d38d763a1a94d68b817e7bc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CreativeCrew\\view\\templates\\header.tpl',
      1 => 1679285066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6417db4cbc90d5_31063851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
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
  <ul class="active">
    <li><a href="index.php">Tech Crew</a></li>
    <li><a href="podcast.php">Podcast</a></li>
    <li><a href="contact.php">Contacto</a></li>
  </ul>
  <br>
  <br>
  <div class="header">
    <img style="width:150px; height:150px;" class="" src="graphics/TC.png" alt="">
  </div>
<?php echo '<script'; ?>
 src="js/jsMainPage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
