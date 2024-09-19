<?php
class Numero{
    private $valor;
    public function __construct($valor){
        $this->valor = $valor;
    }

    public function setvalor($valor){
        $this->valor = $valor;
    }

    public function getValor(){
        return $this->valor;
    }
}
?>