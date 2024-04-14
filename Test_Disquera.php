<?php
//s
include "Disquera.php";
include "Persona.php";

$objDuenio=new Persona("Fito", "Paez","DNI", 33888444);
$objDisquera=new Disquera([7, 30], [21, 00], null, "Av. Argentina 123", $objDuenio);

echo $objDuenio;
echo $objDisquera;

if ($objDisquera->dentroHorarioAtencion(7, 15)) {
    echo "A esa hora la disquera esta abierta\n";
} else {
    echo "A esa hora la disquera esta cerrada\n";
}

if ($objDisquera->dentroHorarioAtencion(21, 15)) {
    echo "A esa hora la disquera esta abierta\n";
} else {
    echo "A esa hora la disquera esta cerrada\n";
}

$objDisquera->abrirDisquera(7, 29);
echo $objDisquera;

$objDisquera->abrirDisquera(7, 30);
echo $objDisquera;

$objDisquera->cerrarDisquera(21, 00);
echo $objDisquera;

$objDisquera->cerrarDisquera(21, 1);
echo $objDisquera;


?>