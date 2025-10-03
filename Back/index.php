<html>
Holaaaa, esto se lanza en el cliente o mejor dicho se renderiza en el cliente
<br></br>

<hr>
<?php
//esto se genera en servidor
echo "BIENVENIDO AL TALLER DE PHP";
echo"<br></br>";
echo date("d/m/Y");
echo"<br></br>";
$x=5;
$y=5;
$resultado=$x+$y;
echo $resultado;
?>

</hr>

<br></br>
<?php
//esto se genera en servidor
echo "SECCION 1";
echo "<br></br>";
define("PI",3.1416);
echo PI;
$frutas=["limon","peras"];//INDEXADO
$personas=["nombre"=> "Juan", "edad"=>30];//ASOCIATIVO

class Persona{
    public $nombre;
    public $edad;
}

$oNombre= new Persona();
$oNombre->nombre="Juan";
$oNombre->edad=30;
echo "<br></br>";
echo $oNombre->nombre," ",$oNombre->edad;
echo "<br></br>";
var_dump($oNombre);


?>
<br></br>


</html>
