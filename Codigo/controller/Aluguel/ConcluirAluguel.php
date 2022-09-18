<?php

include_once "../../persitance/conexao.php";
include_once "../../model/aluguel.php";
include_once "../../persitance/aluguelDAO.php";

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$id = mysqli_real_escape_string($conexao, $_GET['id']);

$alugueldao = new AluguelDAO();
$alugueldao->concluirAluguel($id, $conexao);


?>