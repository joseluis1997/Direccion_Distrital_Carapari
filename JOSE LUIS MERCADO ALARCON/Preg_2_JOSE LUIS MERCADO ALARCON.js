console.log("--------MENU PROCESAMIENTOS DE TEXTOS CON FUNCIONES-------");
console.log("1. Longitud de la Cadena Usando length");
console.log("2. Posicion de la Cadena Usando slice");
console.log("3. Recuperar la Cadena Usando Substr");
console.log("4. Remplazar la Cadena Usando Remplace");
console.log("5. Eliminar Espacio en Blanco de la Cadena Usando Trim");
console.log("6. Concatenar dos Cadenas Usando Concat");

var opcion = Number(prompt("Elija su Opcion"));
var cadena = prompt("Ingrese el valor");

switch(opcion ){
    case 1:
        imprimir();
        console.log("Tama;o de cadena es = " , cadena.length);
    break;
    case 2:
        imprimir();
        slice();
    break;
    case 3:
        imprimir();
        Substr();
    break;
    case 4:
        imprimir();
        Remplace();
    break;
    case 5:
        imprimir();
        eliminando();
    break;
    case 6:
        imprimir();
        concateanar();
    break;
    default:
        console.log("Opcion Erronea");
}

function slice(){
    let inicio = Number(prompt("Introduzca el Inicio de la Cadena"));
    let final = Number(prompt("Introduzca el final de la Cadena"));
    var Posicion = cadena.slice(inicio,  final);
    console.log(Posicion);
}

function Substr(){
    let inicio = Number(prompt("Introduzca el valor de la cadena"));
    let final = Number(prompt("Introduzca el valor final de la cadena"));
    var Posicion = cadena.substring(inicio,  final);
    console.log(Posicion);
}

function Remplace(){
    let remplazo = prompt("Introduzaca el valor nuevo");
    console.log(cadena.replace(cadena, remplazo));
}

function eliminando (){
    let dele = cadena;
    console.log(dele.length)
    let sinEspacios = dele.trim();
    console.log(sinEspacios.length)
    console.log(sinEspacios);
}
function concateanar(){
    var cadena2 = prompt("Ingrese su nueva palabra o cadena  de texto");
    console.log(cadena.concat(' ', cadena2));
}
function imprimir(){
    console.log("----------------------------------------");
    console.log("Valor Original = " + cadena);
}