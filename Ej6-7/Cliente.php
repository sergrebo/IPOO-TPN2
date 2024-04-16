<?php
//s
class Cliente{
    private $objPersona;
    private $objTramite;

    public function __construct($objPersona, $objTramite)
    {
        $this->objPersona=$objPersona;
        $this->objTramite=$objTramite;
    }

    public function getObjPersona(){
        return $this->objPersona;
    }
    public function getObjTramite(){
        return $this->objTramite;
    }

    public function setObjPersona($nvoObjPersona){
        $this->objPersona=$nvoObjPersona;
    }
    public function setObjTramite($nvoObjTramite){
        $this->objTramite=$nvoObjTramite;
    }

    public function __toString()
    {
        return $this->getObjPersona(). " - ". $this->getObjTramite();
    }
}
?>