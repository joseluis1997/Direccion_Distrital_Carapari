console.log("-------FUNCIONES  MATEMATICAS");
console.log("1. Redondeo Usando Round");
console.log("2. Redondeo Usando Floor");
console.log("3. Redondeo Usando Ceil");
console.log("4. Raiz Cuadrada sqrt");
console.log("5. Valor Absoluto Abs");
console.log("6. Potencia Pow");

let opcion = Number(prompt("Elija su Opcion"));
let input = Number(prompt("Ingrese el valor"));


switch(opcion ){
    case 1:
        console.log("Valor Original = ", input);
        let resultado = Math.round(input);
        console.log("Valor Redondeado con Round = ", resultado);
    break;
    case 2:
        console.log("Valor Original = ", input);
        let resultado1 = Math.floor(input);
        console.log("Valor Redondeado con Floor = ", resultado1);
    break;
    case 3:
        console.log("Valor Original = ", input);
        let resultado2 = Math.ceil(input);
        console.log("Valor Redondeado con Ceil = ", resultado2);
    break;
    case 4:
        console.log("Valor Original = ", input);
        let resultado3 = Math.sqrt(input);
        console.log("Raiz cuadrada sqrt = ",resultado3);
    break;
    case 5:
        console.log("Valor Original = ", input);
        let resultado4 = Math.abs(input);
        console.log("Valor Absoluto =" ,resultado4);
    break;
    case 6:
        console.log("Valor Original = ", input);
        let exp = Number(prompt("Ingrese el exponente"));
        let resultado5 = Math.pow(input,exp);
        console.log("Su nuevo Valor es = ", resultado5);
    break;
    default:
        console.log("Opcion Erronea");
}

