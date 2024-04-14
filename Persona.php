<?php
//s
class Persona{
    private $nombre;
    private $apellido;
    private $tipoDoc;
    private $numeroDoc;

    public function __construct($nombre, $apellido, $tipoDoc, $numeroDoc){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->tipoDoc=$tipoDoc;
        $this->numeroDoc=$numeroDoc;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getTipoDoc(){
        return $this->tipoDoc;
    }
    public function getNumeroDoc(){
        return $this->numeroDoc;
    }

    public function setNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }
    public function setApellido($nuevoApellido){
        $this->apellido=$nuevoApellido;
    }
    public function setTipoDoc($nuevoTipoDoc){
        $this->tipoDoc=$nuevoTipoDoc;
    }
    public function setNumeroDoc($nuevoNumeroDoc){
        $this->numeroDoc=$nuevoNumeroDoc;
    }

    public function __toString(){
        return "Nombre: ". $this->getNombre(). " - Apellido: ". $this->getApellido(). " - Documento: ". $this->getTipoDoc(). " ". $this->getNumeroDoc();
    }
}
?>