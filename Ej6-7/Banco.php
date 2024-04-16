<?php
//sS
class Banco{
    private $sucursal;
    private $domicilio;
    private $arrayObjMostradores;

    public function __construct($sucursal, $domicilio, $arrayObjMostradores)
    {
        $this->sucursal=$sucursal;
        $this->domicilio=$domicilio;
        $this->arrayObjMostradores=$arrayObjMostradores;
    }

    public function getSucursal(){
        return $this->sucursal;
    }
    public function getDomicilio(){
        return $this->domicilio;
    }
    public function getArrayObjMostradores(){
        return $this->arrayObjMostradores;
    }

    public function setSucursal($nvaSucursal){
        $this->sucursal=$nvaSucursal;
    }
    public function setDomicilio($nvoDomicilio){
        $this->domicilio=$nvoDomicilio;
    }
    public function setArrayObjMostradores($nvoArrayObjMostradores){
        $this->arrayObjMostradores=$nvoArrayObjMostradores;
    }

    public function __toString()
    {
        return "Sucursal: ". $this->getSucursal(). " - Dirección: ". $this->getDomicilio(). " - ". $this->getArrayObjMostradores();     //Necesito un metodo para listar los elementos del arreglo
    }

    public function mostradoresQueAtienden($unTramite){
        $arregloMostradoresAtienden=[];
        for ($i=0; $i<count($this->getArrayObjMostradores()) ; $i++) { 
            if ($this->getArrayObjMostradores()[$i]->atiende($unTramite)) {
                array_push($arregloMostradoresAtienden, $this->getArrayObjMostradores()[$i]);
            }
        }
        return $arregloMostradoresAtienden;
    }
}
?>