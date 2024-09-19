<?php
class operacion{
    private $num1;
    private $num2;
    public $sumar;
    public $restar;
    public $multiplicar;
    public $dividir;
    
    public function __construct(Numero $num1, Numero $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function sumar(){
        $this->sumar = $this->num1->getvalor() + $this->num2->getvalor();
        return $this->sumar;
    }

    public function restar(){
        $this->restar = $this->num1->getvalor() - $this->num2->getvalor();
        return $this->restar;
    }

    public function multiplicar(){
        $this->multiplicar = $this->num1->getvalor() * $this->num2->getvalor();
        return $this->multiplicar;
    }

    public function dividir(){
        $this->dividir = $this->num1->getvalor() / $this->num2->getvalor();
        return $this->dividir;
    }
}
?>