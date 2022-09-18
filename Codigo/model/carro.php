<?php

class Carro{
    private $nomeVeiculo;
    private $placa;
    private $combustivel;
    private $cor;
    private $ano;
    private $valor;

    function __construct($nomeVeiculo, $placa, $combustivel, $cor, $ano, $valor){
        $this->nomeVeiculo = $nomeVeiculo;
        $this->placa = $placa;
        $this->combustivel = $combustivel;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->valor = $valor;
        
    }
    
    function getNomeVeiculo(){
        return $this->nomeVeiculo;
    }

    function getPlaca(){
        return $this->placa;
    }

    function getCombustivel(){
        return $this->combustivel;
    }

    function getCor(){
        return $this->cor;
    }

    function getAno(){
        return $this->ano;
    }

    function getValor(){
        return $this->valor;
    }
}


?>



