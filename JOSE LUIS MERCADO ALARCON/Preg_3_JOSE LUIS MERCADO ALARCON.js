console.log("------MENU ARRAY-------");

console.log("1. A;adir Elemento de la Ultima Posicion Usando Push");
console.log("2. Eliminando Elemento de la Ultima Posicion Usando Pop");
console.log("3. Eliminar Elementos desde la posicion y cantidad usando slice");
console.log("4. A;adir Elementos desde la primera posicion usando unshift");
console.log("5. Eliminar Elementos desde la primera posicion  usando shift");
console.log("6. Convertir de Arreglo a String");
console.log("7.Convertir de String a Arreglo usando split")

var opcion = Number(prompt("Elija su Opcion"));
var cadena = prompt("Ingrese el valor");

switch(opcion ){
    case 1:
        imprimir();
        var cadena = [cadena];
        var cadenita = prompt("Inserte su Nueva Cadena");
        cadena.push(cadenita);
        console.log(cadena);
    break;
    case 2:
        imprimir();
        pop();
    break;
    case 4:
        imprimir();
        var cadena = [cadena];
        var cadenita = prompt("Inserte su Nueva Cadena");
        cadena.unshift(cadenita);
        console.log(cadena);
    break;
    case 5:
        imprimir();
        var cadena = [cadena];
        var cadenita = prompt("Inserte su Nueva Cadena");
        cadena.push(cadenita);
        console.log(cadena);
        cadena.shift();
        console.log(cadena);
    break;
    case 6:
        imprimir();
        var cadena = [cadena];
        var cadenita = prompt("Inserte su Nueva Cadena");
        cadena.push(cadenita);
        console.log(cadena);
        console.log(cadena.join());
    break;
    case 7:
        imprimir();
        console.log(typeof(cadena));
        var arreglito = cadena.split(' ');
        console.log(arreglito);
    break;
    default:
        console.log("Opcion Erronea.........");
}

function pop(){
    var cadena = [cadena];
    var cadenita = prompt("Inserte su Nueva palabra");
    cadena.push(cadenita);
    console.log("Valor original del arreglo", cadena);
    cadena.pop();
    console.log("Eliminando una palabra del arreglo", cadena);
    return console.log(cadena);
}
function imprimir(){
    console.log("----------------------------------------");
    console.log("Valor Original = " + cadena);
}