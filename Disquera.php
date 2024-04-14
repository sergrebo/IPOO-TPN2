<?php
//s
class Disquera{
    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $objDuenio;

    public function __construct($hora_desde, $hora_hasta, $estado, $direccion, $objDuenio){
        $this->hora_desde=$hora_desde;
        $this->hora_hasta=$hora_hasta;
        $this->estado=$estado;
        $this->direccion=$direccion;
        $this->objDuenio=$objDuenio;
    }

    public function getHora_desde(){
        return $this->hora_desde;
    }
    public function getHora_hasta(){
        return $this->hora_hasta;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getObjDuenio(){
        return $this->objDuenio;
    }

    public function setHora_desde($nvaHora_desde){
        $this->hora_desde=$nvaHora_desde;
    }
    public function setHora_hasta($nvaHora_hasta){
        $this->hora_hasta=$nvaHora_hasta;
    }
    public function setEstado($nvoEstado){
        $this->estado=$nvoEstado;
    }
    public function setDireccion($nvaDireccion){
        $this->direccion=$nvaDireccion;
    }
    public function setObjDuenio($nvoObjDuenio){
        $this->objDuenio=$nvoObjDuenio;
    }

    public function __toString(){
        return "Disquera\nHorario: ". $this->getHora_desde()[0].":". $this->getHora_desde()[1] . " a ". $this->getHora_hasta()[0].":". $this->getHora_hasta()[1] . " - Estado: ". $this->getEstado(). " - Dirección: ". $this->getDireccion(). " - Dueño: ". $this->getObjDuenio();
    }

    /** Dada una hora y minutos retorna true si la tienda debe encontrarse abierta en ese horario y false en caso contrario 
     * 
    */
    public function dentroHorarioAtencion($hora, $minutos){
        $respuesta=false;
        if ($hora>=$this->getHora_desde()[0] && $hora<=$this->getHora_hasta()[0]){
            if ($hora==$this->getHora_desde()[0] && $minutos>=$this->getHora_desde()[1]){
                $respuesta=true;
                } elseif ($hora==$this->getHora_hasta()[0] && $minutos<=$this->getHora_hasta()[1]){
                    $respuesta=true;
                } elseif ($hora>$this->getHora_desde()[0] && $hora<$this->getHora_hasta()[0]) {
                    $respuesta=true;
                }
        } else {
            $respuesta=false;
        }
        return $respuesta;
    }

    /** Dada una hora y minutos corrobora que se encuentra dentro del horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura
     * 
     */
    public function abrirDisquera($hora, $minutos){
        if ($this->dentroHorarioAtencion($hora, $minutos)){
            $this->setEstado(true);
        }
    }

    /** Dada una hora y minutos corrobora que se encuentra fuera del horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre
     * 
     */
    public function cerrarDisquera($hora, $minutos){
        if (!$this->dentroHorarioAtencion($hora, $minutos)){
            $this->setEstado(false);
        }
    }
}
?>