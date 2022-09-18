<?php
include_once "../../persitance/conexao.php";
include_once "../../persitance/carroDAO.php";

$conexao = new Conexao();
$conexao = $conexao->getConexao();

/*Recebe o valor de 'id' do cadastrado que for clicado 'Deletar' */
$id = mysqli_real_escape_string($conexao, $_POST['delete_carro']);

$carrodao = new CarroDAO();
$carrodao->excluirCarro($id, $conexao);