/*let fechaActual = new Date();
console.log(fechaActual);

let mes = fechaActual.getMonth();
console.log(mes);

let dia = fechaActual.getDay();
console.log(dia);

let dia2 = fechaActual.getDate();
console.log(dia2);

var anioActual = fechaActual.getFullYear();
console.log(anioActual);

let minutos = fechaActual.getHours();
console.log(minutos);

let segundos = fechaActual.getMinutes();
console.log(segundos);

let miliSegundfos =fechaActual.getMilliseconds();
console.log(miliSegundfos);

let titulo = document.getElementsByClassName("titulo");
console.log(titulo);*/

let fechaActual = new Date();

let miliSegundfos = fechaActual.getTime();
console.log(typeof miliSegundfos);

let fecha1 = fechaActual.toLocaleString();
console.log(fecha1);
console.log(typeof fecha1);

let fecha2 = fechaActual.toLocaleDateString();
console.log(fecha2);
console.log(typeof fecha2);

let fecha3 = fechaActual.toTimeString();
console.log(fecha3);
console.log(typeof fecha3);

console.log("-----------------------");
let titulo = document.getElementsByClassName("titulo");
console.log(titulo);

let mensaje = document.getElementsByClassName("mensaje");
console.log(mensaje);

console.log("-----------querySelector------------");
let etiqueta = document.querySelectorAll("h2");
console.log(etiqueta);

console.log("-----------querySelectorClase------------");
let etiqueta1 = document.querySelectorAll(".titulo");
console.log(etiqueta1);

console.log("-----------querySelector ID------------");
let etiqueta2 = document.querySelectorAll("#bienvenido");
console.log(etiqueta2);
