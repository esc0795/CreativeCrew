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
