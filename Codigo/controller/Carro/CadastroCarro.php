<?php

include_once "../../persitance/conexao.php";
include_once "../../model/carro.php";
include_once "../../persitance/carroDAO.php";

$nomeVeiculo = $_POST['nomeVeiculo'];
$placa = $_POST['placa'];
$combustivel = $_POST['combustivel'];
$cor = $_POST['cor'];
$ano = $_POST['ano'];
$valor = $_POST['valor'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$carro = new Carro($nomeVeiculo, $placa, $combustivel, $cor, $ano, $valor);

$carrodao = new CarroDAO();
$carrodao->salvarCarro($carro, $conexao);

?>