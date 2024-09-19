<?php
class operacion{
    private $numeroUno;
    private $numeroDos;
    public $sumar;
    public $restar;
    public $multiplicar;
    public $division;

    public function setSumar($numeroUno, $numeroDos){
        $this-> sumar = $numeroUno + $numeroDos;
    }
    public function getSumar(){
        return $this->sumar;
    }

    public function setRestar($numeroUno, $numeroDos){
        $this->restar = $numeroUno - $numeroDos;
    }
    public function getRestar(){
        return $this->restar;
    }

    public function setMultiplicar($numeroUno, $numeroDos){
        $this->multiplicar = $numeroUno * $numeroDos;
    }
    public function getMultiplicar(){
        return $this->multiplicar;
    }

    public function setDivision($numeroUno, $numeroDos){
        if($numeroDos!= 0){
            $this->division = $numeroUno / $numeroDos;
        }else {
            $this->division = "Error: División por cero";
        }
    }
    public function getDivision(){
        return $this->division;
    }
}
?>