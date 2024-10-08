/*console.log("Menu Funciones");
console.log("1. SUMA");
console.log("2. RESTA");
console.log("3. MULTIPLICACION");
console.log("4. DIVICION");
console.log("5. RECIDUO");

let opcion = Number(prompt("Elija una opcion"));
let a = Number(prompt("Ingrese el valor de A"));
let b = Number(prompt("Ingrese el valor de B"));

switch(opcion ){
    case 1:
        suma(a,b);
    break;
}

function suma(a, b){
    console.log(a+b);
}*/



/*console.log("Elige un objeto");
console.log("1. Registrar");
console.log("2. Eliminar");

let opcion = Number(prompt("Ingrese una opcion"));
var estudiantes ={

}
function Agregar(){
    var ci = Number(prompt("ingrese su carnet de identidad"));
    var nombresito = prompt("ingrese su nombre");
    var apell = prompt("ingrese su apellido");

    estudiantes.ci=ci;
    estudiantes.nombre=nombresito;
    estudiantes.apellido=apell;
    
    console.log(estudiantes);
}

function Eliminar(){
    delete estudiantes.apellido;
    console.log("-------------------");
    console.log(estudiantes);
}

switch(opcion){
    case 1:
        Agregar();
    break;
    case 2:
        Eliminar();
    break;

    default:
        console.log("no existe esa opcion");
}*/


var estudiantes ={
    ci: 8174701,
    nombre: "Jose",
    apellido: "Mercado",

}

var estudiantess = [
    '8174701',
    'Jose',
    'Mercado',]

function Deestructuracion(){
    let {ci, nombre} = estudiantes;
    console.log("ci :"+ci+" nombre:"+nombre);
}

function jose(){
    estudiantes.forEach(item => console.log(item));
}


console.log("Menu con funciones");
console.log("1. Deestructuracion");
console.log("2. Foreach");
console.log("3. Foreach indice");
console.log("4. For of");
console.log("5. For in");

let opcion = Number(prompt("Ingrese su Opcion"));

switch(opcion){
    case 1:
        Deestructuracion();
    break;
    case 2:
        
        jose();
    break;
    default:
        console.log("Error");
    break;
}