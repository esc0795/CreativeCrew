<!DOCTYPE html>
<html>
<head>
  <title>Ratones Coloraos!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
  background-color: black;
}

.mySlides {
  display:none;
}

ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1F2E1F;
  opacity: 95%;
}

li{
  float: left;
}

li a{
  display: block;
  color: white;
  font-family: "Century Gothic";
  text-align: center;
  padding: 16px 75px;
  text-decoration: none;
}

li a:hover{
  background-color: #A52121;
  color: black;
  opacity: 80%;
}

.header{
  width:30em;
  height:17em;
  padding-left: 445px;
  margin-bottom: 15px;
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
  padding-top:20px;
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
  height: 250px;
  opacity: 50%;
  border-style:solid;
  border-radius: 10px;
  margin-top: 35px;
}

.author{
  text-align: center;
  font-family: "Century Gothic";
  font-size: 12px;
  margin-top: 75px;
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
  <div class="header">
    <img class="" src="graphics/RCH.png" alt="">
  </div>
  <p>&nbsp;</p>
  <ul id="menu">
    <li><a href="">Música</a></li>
    <li><a href="">Twitter</a></li>
    <li><a href="">Instagram</a></li>
    <li><a href="">YouTube</a></li>
    <li><a href="">TikTok</a></li>
    <li><a href="">Contacto</a></li>
  </ul>
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
    <img class="mySlides" src="graphics/envivo/caloncho.jpg" style="width:100%">
    <img class="mySlides" src="graphics/envivo/envivo.jpg" style="width:100%">
    <img class="mySlides" src="graphics/envivo/ferreira.jpg" style="width:100%">
    <img class="mySlides" src="graphics/envivo/vega.jpg" style="width:100%">
  </div>
  <script>
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
      setTimeout(carousel, 2000); // Change image every 2 seconds
  }
  </script>
<footer id="footer">
  <p>&nbsp;</p>
  <div class="frase">
    <p>Qué criaturas tan decentes los Ratones Coloraos....</p>
  </div>
  <div class="author">
    <p>Enoc Sibaja Carrion© - Software Developer</p>
    <p>info@escarrion.com</p>
    <p>2023</p>
  </div>
</footer>
</body>
</html>
