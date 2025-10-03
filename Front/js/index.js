/*
document.writeln("ERES UNA MAQUINA JESUS");


//Esto es codigo JS --> POR LO TANTO NO SE VE
document.getElementById("mensaje1").innerText = "¡mensaje 1!";
//Esto es codigo JS --> POR LO TANTO NO SE VE
document.getElementById("mensaje2").innerText = "¡mensaje 2!";
//Esto es codigo JS --> POR LO TANTO NO SE VE
document.getElementById("mensaje3").innerText = "¡mensaje 3!";

//Saludo(); FORMA DE LLAMARLO DESDE EL MISMO JAVA SCRIPT
//Adios(); FORMA DE LLAMARLO DESDE EL MISMO JAVA SCRIPT

const MiFecha = new Date();
document.getElementById("fecha").innerText = MiFecha.toLocaleDateString();

function Saludo() {
    alert("Hola, esta es tu primera funcion")
}

function Adios() {
    alert("Adios, esta es tu segunda funcion")
}

var numero1=50;
var numero2=50;
var resultado=numero1+numero2;
document.getElementById("resultado").innerText=resultado;

if(resultado > 50){
    document.getElementById("resultado").innerText = "El resultado es mayor a 50";
}else{
    document.getElementById("resultado").innerText = "El resultado es menor a 50";
}
*/
let nombre="Jesus";
let apellidos="Sanchez Catalan";
const PI=3.14;

console.log(nombre);
console.log(apellidos);
console.log(PI);

let saludo="Bienvenido " + nombre;
console.log(saludo);

console.log(`Hola ${nombre}`); //OTRA MANERA DE CONCATENAR  

let edad=45;
let temperatura=-6;
let decimal=1.55;
let activo=true;
let noActivo=false;
console.log(activo);

let frutas=["malacatones", "uva", "peras"];
console.log(frutas);

console.log(frutas[0]);
console.log(frutas[1]);
console.log(frutas[2]);

let alumno={ //VARIABLE COMPLEJA, ENCAPSULADA
nombre:"Jesus",apellidos:"Sanchez Catalan",profesion:"Desarrollador Web"
}
console.log(alumno);

//puedo tener funciones con parametro de entrada o sin entrada
//por ejemplo; function Saludar() o function Saludar(nombre), en la 
//primera la llamo con Saludar(); y en la segunda con Saludar(nombre);

document.writeln("Hola Mundo"); //PINTA COMO SI FUESE UN ECHO EN PHP
document.getElementById("mensaje")//NOS QUEDAMOS AQUI.