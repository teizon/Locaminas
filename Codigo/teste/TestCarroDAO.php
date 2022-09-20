<?php

require_once ('../persitance/carroDAO.php');
require_once ('../model/carro.php');
require_once ('../persitance/conexao.php');

use PHPUnit\Framework\TestCase;

class TestCarroDAO extends TestCase {
    
    public function testSalvarCarro(){
        $conexao = new Conexao();
        $conexao = $conexao->getConexao();
        $nomeVeiculo = 'Celta';
        $placa = 'ABC-9992';
        $combustivel = 'Diesel';
        $cor = 'Preto';
        $ano = 2022;
        $valor = 1999.99;

        $carro = new Carro($nomeVeiculo, $placa, $combustivel, $cor, $ano, $valor);
        $dao = new CarroDAO();

        $this->assertTrue($dao->salvarCarro($carro, $conexao),"Placa de carro já existente no sistema");
    }

    
    public function testEditarCarro(){
        $conexao = new Conexao();
        $conexao = $conexao->getConexao();
        $nomeVeiculo = 'GOL';
        $placa = 'ABC-9992';
        $combustivel = 'Gasolina';
        $cor = 'Preto';
        $ano = 2002;
        $valor = 199.99;

        $id = 1;

        $carro = new Carro($nomeVeiculo, $placa, $combustivel, $cor, $ano, $valor);
        $dao = new CarroDAO();

        $this->assertTrue($dao->editarCarro($carro, $id, $conexao), "ID de carro não encontrado ou placa já existente");
    }
    
    public function testExcluirCarro(){
        $conexao = new Conexao();
        $conexao = $conexao->getConexao();
        $id = 1;

        $dao = new CarroDAO();

        $this->assertTrue($dao->excluirCarro($id, $conexao),"ID de carro não encontrado ou carro atualmente em aluguel");
    }

}