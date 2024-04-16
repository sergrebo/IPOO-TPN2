<?php
//s
include "Banco.php";
include "Mostrador.php";

$objMostradorA=new Mostrador("A", [1, 3]);
$objMostradorB=new Mostrador("B", [2, 3]);
$objMostradorC=new Mostrador("C", [1, 2]);
$objBanco=new Banco(8303, "Av. Gral. Paz 123", [$objMostradorA, $objMostradorB, $objMostradorC]);

/*
$rta1=$objMostradorA->atiende(1);
if ($rta1){
    echo "atiende el tramite 1";
} else {
    echo "no atiende el tramite 1";
}

$rta1=$objMostradorA->atiende(2);
if ($rta1){
    echo "atiende el tramite 2";
} else {
    echo "no atiende el tramite 2";
}

$rta1=$objMostradorA->atiende(3);
if ($rta1){
    echo "atiende el tramite 3";
} else {
    echo "no atiende el tramite 3";
}
*/

print_r($objBanco->mostradoresQueAtienden(2));


?>