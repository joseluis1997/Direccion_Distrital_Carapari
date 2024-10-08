console.log("Eliga su Opcion");
console.log("1. Registrar Campo del Obejto Profesor");
console.log("2. Adiccionar Campos del Objeto Profesor");
console.log("3. Eliminar Campos del Objeto Profesor");

let opcion = Number(prompt("Ingrese una opcion"));
var profesor ={

}
switch(opcion){
    case 1:
        Agregar();
    break;
    case 2:
        Adiccionar();
    break;
    case 2:
        Eliminar();
    break;
    default:
        console.log("Opcion Erronea");
}

function Agregar(){
    var ci = Number(prompt("ingrese su carnet de identidad del profesor"));
    var nombresito = prompt("ingrese su nombre del profesor");
    var apell = prompt("ingrese su apellido profesor");

    profesor.ci=ci;
    profesor.nombre=nombresito;
    profesor.apellido=apell;
    
    console.log(profesor);
}

function Adiccionar(){
    var especialidad = prompt("ingrese su especialidad");
    profesor.especialidad=especialidad;
    
    console.log(profesor);
}

function Eliminar(){
    delete profesor.especialidad;
    console.log("-------------------");
    console.log(estudiantes);
}