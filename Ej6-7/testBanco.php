<?php
//s
include "Banco.php";
include "Mostrador.php";
include "Cola.php";
include "../Persona.php";

$objPersona1=new Persona("Pedro", "Perez", "DNI", 33444555);
$objPersona2=new Persona("Carlos", "Menem", "DU", 22333444);
$objPersona3=new Persona("Ivan", "Guzman", "DNI", 11222333);
$objPersona4=new Persona("Clara", "Gimenez", "DNI", 12345678);

$objColaA=new Cola(3, []);
$objColaB=new Cola(3, [$objPersona1, $objPersona2, $objPersona3]);
$objColaC=new Cola(3, [$objPersona4]);

$objMostradorA=new Mostrador("A", [1, 3], $objColaA);
$objMostradorB=new Mostrador("B", [2, 3], $objColaB);
$objMostradorC=new Mostrador("C", [1, 2], $objColaC);

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

print_r($objBanco->mostradoresQueAtienden(2));
*/

echo $objBanco->mejorMostradorPara(1);
echo $objBanco->mejorMostradorPara(2);
echo $objBanco->mejorMostradorPara(3);

?>