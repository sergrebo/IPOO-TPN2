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

    public function mejorMostradorPara($unTramite){
        $menorNroClientes=1000;
        $arregloMostradoresAtienden=$this->mostradoresQueAtienden($unTramite);
        for ($i=0; $i<count($arregloMostradoresAtienden) ; $i++) { 
            if (count($arregloMostradoresAtienden[$i]->getObjCola()->getArrayClientes()) < $menorNroClientes){
                $menorNroClientes=count($arregloMostradoresAtienden[$i]->getObjCola()->getArrayClientes());
                $mejorCola=$arregloMostradoresAtienden[$i]->getCodigo();
            };
            
        }
        return $mejorCola;
    }

    /** Cuando llega un cliente al banco se lo ubica en el mostrador que atienda el trámite que el cliente requiere, que tenga espacio y la menor cantidad de clientes esperando; si no hay lugar en ningún mostrador debe retornar un mensaje que diga al cliente que “será antendido en cuanto haya lugar en un mostrador”
     * 
     */
    public function atender($unCliente){

    }
}
?>