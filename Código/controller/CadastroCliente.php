<?php

include_once "../persitance/conexao.php";
include_once "../model/cliente.php";
include_once "../persitance/clienteDAO.php";

$nome = $_POST['cName'];
$cpf = $_POST['cCPF'];
$cnh = $_POST['cCNH'];
$telefone = $_POST['cTelefone'];
$email = $_POST['cEmail'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$cliente = new Cliente($nome, $cpf, $cnh, $telefone, $email);

$clientedao = new ClienteDAO();
$clientedao->salvarCliente($cliente, $conexao);

?>