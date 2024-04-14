<?php
//S
class Libro{
    private $isbn;
    private $titulo;
    private $anioDeEdicion;
    private $editorial;
    private $objAutor;
    private $nroPaginas;
    private $sinopsis;

    public function __construct($isbn, $titulo, $edicion, $editorial, $objAutor, $nroPaginas, $sinopsis){
        $this->isbn=$isbn;
        $this->titulo=$titulo;
        $this->anioDeEdicion=$edicion;
        $this->editorial=$editorial;
        $this->objAutor=$objAutor;
        $this->nroPaginas=$nroPaginas;
        $this->sinopsis=$sinopsis;
    }

    public function getIsbn(){
        return $this->isbn;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnioDeEdicion(){
        return $this->anioDeEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getObjAutor(){
        return $this->objAutor;
    }
    public function getNroPaginas(){
        return $this->nroPaginas;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }

    public function setIsbn($nuevoIsbn){
        $this->isbn=$nuevoIsbn;
    }
    public function setTitulo($nuevoTitulo){
        $this->titulo=$nuevoTitulo;
    }
    public function setAnioDeEdicion($nuevoAnioDeEdicion){
        $this->anioDeEdicion=$nuevoAnioDeEdicion;
    }
    public function setEditorial($nuevaEditorial){
        $this->editorial=$nuevaEditorial;
    }
    public function setObjAutor($nuevoObjAutor){
        $this->objAutor=$nuevoObjAutor;
    }
    public function setNroPaginas($nuevoNroPaginas){
        $this->nroPaginas=$nuevoNroPaginas;
    }
    public function setSinopsis($nuevaSinopsis){
        $this->sinopsis=$nuevaSinopsis;
    }

    public function __toString(){
        return 'Libro: "'. $this->getTitulo(). '" de '. $this->getObjAutor(). " - ISBN: ". $this->getIsbn(). ' - Editorial: '. $this->getEditorial(). ' - Año '. $this->getAnioDeEdicion(). " - Nro páginas: ". $this->getNroPaginas(). "\nSinopsis:\n". $this->getSinopsis()."\n";
    }

    public function perteneceEditorial($peditorial){
        if (!strcmp($this->getEditorial(), $peditorial)==0){
            $rta=false;
        } else {
            $rta=true;
        }
        return $rta;
    }

    public function aniosdesdeEdicion(){
        return "\n".date('Y')-$this->getAnioDeEdicion(). ' años desde que el libro fue editado.'."\n";
    }
}
?>