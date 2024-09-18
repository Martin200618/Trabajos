<?php

class operaciones{
    public $numeroUno;
    public $numeroDos;
    public $suma;
    public $resta;
    public $division;
    public $multiplicacion;

    function suma($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        $this->suma = $numeroUno + $numeroDos;
        return $this->suma;
    }

    function resta($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        $this->resta = $numeroUno - $numeroDos;
        return $this->resta; 
    }

    function division($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        if($numeroDos!=0){
            $this->division = $numeroUno / $numeroDos;
            return $this->division;
        } else {
            return "Error: No se puede dividir por cero.";
        }
    }

    function multiplicacion($numeroUno, $numeroDos){
        $this->numeroUno = $numeroUno;
        $this->numeroDos = $numeroDos;
        $this->multiplicacion = $numeroUno * $numeroDos;
        return $this->multiplicacion;
    }
}

?>