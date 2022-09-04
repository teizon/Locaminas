<?php

class Cliente{
    private $nome;
    private $cpf;
    private $cnh;
    private $telefone;
    private $email;

    function __construct($nome, $cpf, $cnh, $telefone, $email){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cnh = $cnh;
        $this->telefone = $telefone;
        $this->email = $email;
        
    }
    
    function getNome(){
        return $this->nome;
    }

    function getCPF(){
        return $this->cpf;
    }

    function getCNH(){
        return $this->cnh;
    }

    function getTelefone(){
        return $this->telefone;
    }

    function getEmail(){
        return $this->email;
    }
}


?>



