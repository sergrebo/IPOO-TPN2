<?php
//s
class Cola{
    //private $objMostrador;
    private $nroMaxClientes;
    private $arrayClientes;

    public function __construct(/*$objMostrador,*/ $nroMaxClientes, $arrayClientes)
    {
        /*$this->objMostrador=$objMostrador;*/
        $this->nroMaxClientes=$nroMaxClientes;
        $this->arrayClientes=$arrayClientes;
    }

    /*public function getObjMostrador(){
        return $this->objMostrador;
    }*/
    public function getNroMaxClientes(){
        return $this->nroMaxClientes;
    }
    public function getArrayClientes(){
        return $this->arrayClientes;
    }

    /*public function setObjMostrador($nvoMostrador){
        $this->objMostrador=$nvoMostrador;
    }*/
    public function setNroMaxClientes($nvoNroMaxClientes){
        $this->nroMaxClientes=$nvoNroMaxClientes;
    }
    public function setArrayClientes($nvoArrayClientes){
        $this->arrayClientes=$nvoArrayClientes;
    }

    public function __toString()
    {
        return "Cola ". $this->getNroMaxClientes(). " - ". $this->getArrayClientes();       //Necesito un metodo para listar los componentes del arreglo
    }
}
?>