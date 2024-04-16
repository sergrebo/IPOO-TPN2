<?php
//s
class Tramite{
    private $id;
    private $horaCreacion;
    private $horaResolucion;

    public function __construct($id, $horaCreacion, $horaResolucion)
    {
        $this->id=$id;
        $this->horaCreacion=$horaCreacion;
        $this->horaResolucion=$horaResolucion;
    }

    public function getId(){
        return $this->id;
    }
    public function getHoraCreacion(){
        return $this->horaCreacion;
    }
    public function getHoraResolucion(){
        return $this->horaResolucion;
    }

    public function setId($nvoId){
        $this->id=$nvoId;
    }
    public function setHoraCreacion($nvaHora){
        $this->horaCreacion=$nvaHora;
    }
    public function setHoraResolucion($nvaHora){
        $this->horaResolucion=$nvaHora;
    }

    public function __toString()
    {
        return $this->getId(). " - ". $this->getHoraCreacion(). " - ". $this->getHoraResolucion();
    }
}
?>