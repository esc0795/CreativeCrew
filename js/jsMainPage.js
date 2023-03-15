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
  setTimeout(carousel, 4000); // Change image every 3 seconds
}

document.addEventListener("DOMContentLoaded", function(event){

    const titulo = document.getElementById('frase3');
    const texto = titulo.textContent;

    titulo.innerText = '';
    for( let i = 0; i < texto.length; i++){
        titulo.innerHTML += '<span>' + texto.charAt(i) + '</span>';
    }

    let caracterActual = 0;
    let duracionAnimacion = 2000;

    function escribirLetra(){
        const span = titulo.querySelectorAll('span')[caracterActual];
        span.classList.add('animacion-escribir');
        caracterActual++;
        if(caracterActual == texto.length){
            terminarAnimacion();
            return;
        }
        setTimeout(escribirLetra,duracionAnimacion/texto.length);
    }

    function terminarAnimacion(){
        titulo.classList.remove('maquina-escribir');
        const spans = titulo.querySelectorAll('span');
        for(let i = 0; i < spans.length; i++){
            spans[i].classList.remove('animacion-escribir');
        }
    }
    titulo.classList.add('maquina-escribir');
    escribirLetra();
});
