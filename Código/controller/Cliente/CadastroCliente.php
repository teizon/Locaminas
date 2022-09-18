<?php

include_once "../../persitance/conexao.php";
include_once "../../model/cliente.php";
include_once "../../persitance/clienteDAO.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cnh = $_POST['cnh'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$cliente = new Cliente($nome, $cpf, $cnh, $telefone, $email);

$clientedao = new ClienteDAO();
$clientedao->salvarCliente($cliente, $conexao);

?>