<?php
include_once "../persitance/conexao.php";
include_once "../persitance/clienteDAO.php";

$conexao = new Conexao();
$conexao = $conexao->getConexao();

/*Recebe o valor de 'id' do cadastrado que for clicado 'Deletar' */
$id = mysqli_real_escape_string($conexao, $_POST['delete_cliente']);

$clientedao = new ClienteDAO();
$res = $clientedao->excluirCliente($id, $conexao);