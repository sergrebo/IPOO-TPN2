<?php
//s
include_once "Persona.php";

$objPersona=new Persona("Pedro", "Perez", "DNI", 33444555);
echo $objPersona;

$objPersona->setNombre("Carlos");
$objPersona->setApellido("Menem");
$objPersona->setTipoDoc("DU");
$objPersona->setNumeroDoc(22333444);
echo $objPersona;
?>