// var nombre = nacho;
// let edad = 22;
// const PI = 3.1416;
// 1)

// function calcularCirculo(radio) {
// let circulo = radio ** 2 / Math.PI;
// return circulo;
// }
// console.log(calcularCirculo(10));
// // 2
// function calcularRectangulo(ancho, alto) {
//     let rectangulo = 2 * (ancho + alto);
//     return rectangulo;
// }
// console.log(calcularRectangulo(10, 10))
// // 3

//function calcularCircu() {
//let radi = prompt("cuanto mide el radio?");
//let radionum = parseInt(radi);
//t circul = radionum ** 2 * Math.PI;
//console.log(circul) ;
//}

//calcularRectangulo();
//function calcularRectangulo() {
  /*  let alto = prompt("cuanto mide el alto?");
    let ancho = prompt("cuanto mide el ancho?");
    let altonum = parseInt(alto);
    let anchonum = parseInt(ancho);
    let rectan = 2 * (altonum + anchonum);
    console.log(rectan) ;
    }
calcularRectangulo();   */
const contenedor = document.getElementById('contenedor');
const primerParrafo = contenedor.children[1];
const segundoParrafo = primerParrafo.nextElementSibling;
const Titulo = primerParrafo.previousElementSibling;