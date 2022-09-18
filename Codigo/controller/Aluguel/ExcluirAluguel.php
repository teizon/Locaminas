<?php
include_once "../../persitance/conexao.php";
include_once "../../persitance/aluguelDAO.php";

$conexao = new Conexao();
$conexao = $conexao->getConexao();

/*Recebe o valor de 'id' do cadastrado que for clicado 'Deletar' */
$id = mysqli_real_escape_string($conexao, $_POST['delete_aluguel']);

$alugueldao = new AluguelDAO();
$alugueldao->excluirAluguel($id, $conexao);