<?php
class saludo{
    private $saludar;
    public function setsaludar($saludar){
        $this->saludar = $saludar;
    }

    public function getsaludar(){
        return $this->saludar;
    }
}
?>