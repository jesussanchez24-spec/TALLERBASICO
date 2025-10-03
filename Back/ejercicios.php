<?php
$nombre="Jesus";
$apellidos="Sanchez Catalan";
$edad=24;
$altura=1.79;
$casado=false;

var_dump($nombre);

echo "<br></br>";
echo "<br></br>";

var_dump($nombre, $apellidos);

echo "<br></br>";
echo "<br></br>";

var_dump($edad);

echo "<br></br>";
echo "<br></br>";

//array Asociativo
$aPersona=["nombre"=>"Jesus", "apellidos"=>"Sanchez Catalan", "edad"=>24, "altura"=> 1.79, "casado"=>false];
var_dump($aPersona);

echo "<br></br>";
$tipoNull=Null;
//in null() comprueba si una variable es tipo null, porque php es un lenguaje interpretado, si llega una variable nula, pues de esta manera comprobamos para que no pete.
if(is_null($tipoNull)){
    echo "es nulo";
}

$a=5;
$b=5;
echo "<br></br>";

echo $a + $b;
echo "<br></br>";
echo $a - $b;
echo "<br></br>";
echo $a * $b;
echo "<br></br>";
echo $a / $b;
echo "<br></br>";
echo $a % $b;
echo "<br></br>";
echo $a ** $b;
echo "<br></br>";

echo $a==$b;
echo "<br></br>";

if($a==$b){
    echo"es igual";
}else{
    echo"no es igual";
};

echo "<br></br>";
$esMayorDeEdad= ($b>18) ? true : false;//Funcion Flecha, ahorra lineas de código
echo $esMayorDeEdad;
var_dump($esMayorDeEdad);


?>