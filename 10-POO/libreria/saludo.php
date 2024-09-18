<?php

class saludo{
    public $saludar;

    public function saluda($saludar){
        $this->saludar = $saludar;
        return $this->saludar;
    }
}

?>