<?php
include_once "Persona.php";
include_once "Libro.php";
include_once "Lectura.php";

$objPersona=new Persona("Tomas", "Rebord", "DNI", 33444555);
$objLibro=new Libro(9789504985921, "El Naucrato", 2024, "Planeta", $objPersona, 224, "¿Qué es el Naucrato?");
$objLectura= new Lectura($objLibro, 1);

echo $objLectura;
echo "\n". $objLectura->retrocederPagina();
echo "\n". $objLectura->siguientePagina();

echo "\n". $objLectura->irPagina(224);

echo $objLectura;
echo "\n". $objLectura->siguientePagina();
echo "\n". $objLectura->retrocederPagina();

echo "\n". $objLectura->irPagina(1);
echo $objLectura;
?>