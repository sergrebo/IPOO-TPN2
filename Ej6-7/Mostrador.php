<?php
//s
class Mostrador{
    private $codigo;
    private $arrayTramites;
    
    public function __construct($codigo, $arrayTramites)
    {
        $this->codigo=$codigo;
        $this->arrayTramites=$arrayTramites;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function getArrayTramites(){
        return $this->arrayTramites;
    }

    public function setCodigo($nvoCodigo){
        $this->codigo=$nvoCodigo;
    }
    public function setArrayTramites($nvoArrayTramites){
        $this->arrayTramites=$nvoArrayTramites;
    }

    public function __toString()
    {
        return "Mostrador ". $this->getCodigo(). " - Tramita ". $this->getArrayTramites();      //Necesito un metodo para listar los elementos del arreglo
    }

    public function atiende($unTramite){
        $i=0;
        $respuesta=false;
        while ($i<count($this->getArrayTramites()) && !$respuesta) {
            if ($unTramite==$this->getArrayTramites()[$i]) {
                $respuesta=true;
            }
            $i++;
        }
        return $respuesta;
    }
}
?>