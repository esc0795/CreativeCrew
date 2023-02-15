<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  background-color: black;
}

.mySlides {
  display:none;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1F2E1F;
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
  padding: 16px 83px;
  text-decoration: none;
}

li a:hover {
  background-color: #A52121;
  color: black;
  opacity: 80%;
}

.fotoPrin {
  opacity: 95%;
  height: 250px;
  margin-top: 35px;
  border-radius: 50px;
  margin-left: 5px;
}

.header {
  width:30em;
  height:17em;
  padding-left: 435px;
  margin-bottom: 15px;
}

.f1 {
  font-family: "Century Gothic";
  color: white;
  padding-top: 25px;
  padding-left: 350px;
  width: 60%;
  margin-left: 268px;
}

td {
  border-collapse: collapse;
  border-radius: 5px;
  opacity: 85%;
  padding-left: 63px;
}

th {
  text-align: justify;
  padding-left: 79px;
}

table {
  border-collapse: collapse;
  border-radius: 5px;
  opacity: 85%;
  margin-left: 150px;
}

#tickets {
  text-decoration: none;
  font-family: "Century Gothic";
  color: white;
  border-style: solid;
}

#chivosTxt {
  color: white;
  font-family: "Century Gothic";
  padding-top:20px;
  padding-left: 605px;
  opacity: 85%;
}

.btnTickets {
  background-color: #063E05;
  height: 40px;
  width: 95px;
  border-radius: 10px;
  color: white;
}

.btnTickets:hover {
  background-color: #A52121;
  color: black;
}

#footer {
  background-color: #2E5B2D;
  height: 250px;
  opacity: 50%;
  border-style:solid;
  border-radius: 15px;
  margin-top: 35px;
}

.author {
  text-align: center;
  font-family: "Century Gothic";
  font-size: 12px;
  margin-top: 25px;
  color: #EEEEEE;
}

.frase {
  text-align: center;
  font-family: "Century Gothic";
  font-size: 20px;
  margin-top: 20px;
  color: #EEEEEE;
  background-color: #11230F;
}

a {
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
<div class="w3-content w3-display-container" style="max-width:70%; margin-left:340px;">
  <img class="mySlides" src="graphics/envivo/caloncho.jpg" style="width:70%; height: 40em">
  <img class="mySlides" src="graphics/envivo/envivo.jpg" style="width:70%; height: 40em">
  <img class="mySlides" src="graphics/envivo/ferreira.jpg" style="width:70%; height: 40em">
  <img class="mySlides" src="graphics/envivo/vega.jpg" style="width:70%; height: 40em">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" style="max-width:70%; margin-left:10px;">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="max-width:70%; margin-right: 305px;">&#10095;</button>
</div>
<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");

    if (n > x.length) {
      slideIndex = 1
    }

    if (n < 1) {
      slideIndex = x.length
    }

    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }

    x[slideIndex-1].style.display = "block";
}
</script>
<footer id="footer">
  <div class="">
    <p>&nbsp;</p>
  </div>
  <div class="frase">
    <center><p>Qué criaturas tan decentes los Ratones Coloraos....</p></center>
  </div>
  <div class="author">
    <center><p>Enoc Sibaja Carrion - Software Developer©</p></center>
    <center><p><a href="mailto:hege@example.com">info@escarrion.com</a></p></center>
    <center><p>February, 2023</p></center>
  </div>
</footer>
</body>
</html>
