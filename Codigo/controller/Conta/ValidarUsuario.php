<?php
include_once "../../persitance/conexao.php";
include_once "../../model/conta.php";
include_once "../../persitance/contaDAO.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$conta = new Conta($usuario, $senha);

$contadao = new ContaDAO();
$contadao->validarUsuario($conta, $conexao);

?>