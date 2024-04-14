<?php
//s
include "Persona.php";
include "Libro.php";

$objAutor=new Persona("Gabriel", "Rolón", "DNI", 22444666);
$objLibro=new Libro(9789504976752, "La Felicidad", 2023, "Planeta", $objAutor, 392, "lorem ipsum");

echo $objLibro;

$objAutor1=new Persona("Tomás", "Rebord", "DNI", 33444555);
$objLibro->setIsbn(9789504985921);
$objLibro->setTitulo("El Naucrato");
$objLibro->setAnioDeEdicion(2024);
$objLibro->setEditorial("LALALA");
$objLibro->setObjAutor($objAutor1);
$objLibro->setNroPaginas(224);
$objLibro->setSinopsis("¿Qué es el Naucrato?");

echo $objLibro;
?>