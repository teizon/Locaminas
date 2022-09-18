<?php

class Conta{
    private $usuario;
    private $senha;

    function __construct($usuario, $senha){
        $this->usuario = $usuario;
        $this->senha = $senha; 
    }
    
    function getUsuario(){
        return $this->usuario;
    }

    function getSenha(){
        return $this->senha;
    }
}


?>



