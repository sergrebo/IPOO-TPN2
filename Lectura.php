<?php
class Lectura{
    private $objLibro;
    private $pagLeyendo;

    public function __construct($objLibro, $pagLeyendo){
        $this->objLibro=$objLibro;
        $this->pagLeyendo=$pagLeyendo;
    }

    public function getObjLibro(){
        return $this->objLibro;
    }
    public function getPagLeyendo(){
        return $this->pagLeyendo;
    }

    public function setObjLibro($nvoObjLibro){
        $this->objLibro=$nvoObjLibro;
    }
    public function setPagLeyendo($nvaPagLeyendo){
        $this->pagLeyendo=$nvaPagLeyendo;
    }

    public function __toString(){
        return "Leo ". $this->getObjLibro(). "Estoy por la página ". $this->getPagLeyendo();
    }

    public function siguientePagina(){
        if ($this->getPagLeyendo()+1<=$this->objLibro->getNroPaginas()) {
            $nuevaPagina=$this->getPagLeyendo()+1;
            $this->setPagLeyendo($nuevaPagina);
        } else {
            $nuevaPagina=$this->getPagLeyendo();
        }
        return $nuevaPagina;
    }

    public function retrocederPagina(){
        if ($this->getPagLeyendo()>1) {
            $nuevaPagina=$this->getPagLeyendo()-1;
            $this->setPagLeyendo($nuevaPagina);
        } else {
            $nuevaPagina=$this->getPagLeyendo();
        }
        return $nuevaPagina;
    }

    public function irPagina($x){
        $paginaActual=$this->getPagLeyendo();
        if ($x>$this->getPagLeyendo()) {
            while ($this->getPagLeyendo()!=$x) {
                $paginaActual=$this->siguientePagina();
            }
        } elseif ($x<$this->getPagLeyendo()) {
            while ($this->getPagLeyendo()!=$x) {
                $paginaActual=$this->retrocederPagina();
            }
        }
        return $paginaActual;
    }

    public function libroLeido($titulo){
        
    }
}
?>