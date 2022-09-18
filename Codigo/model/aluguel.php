<?php

class Aluguel{
    private $idCarro;
    private $idCliente;
    private $prazo;

    function __construct($idCarro, $idCliente, $prazo){
        $this->idCarro = $idCarro;
        $this->idCliente = $idCliente;
        $this->prazo = $prazo;
    }
    
    function getIdCarro(){
        return $this->idCarro;
    }

    function getIdCliente(){
        return $this->idCliente;
    }

    function getPrazo(){
        return $this->prazo;
    }
}

?>



