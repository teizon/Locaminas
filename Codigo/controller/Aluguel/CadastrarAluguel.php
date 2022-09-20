<?php

include_once "../../persitance/conexao.php";
include_once "../../model/aluguel.php";
include_once "../../persitance/aluguelDAO.php";

$idCarro = $_POST['id'];
$cpf = $_POST['cpf'];
$prazo = $_POST['prazo'];

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$alugueldao = new AluguelDAO();
$idCliente = $alugueldao->validarCliente($conexao, $cpf);

if($idCliente != -1){
    $aluguel = new Aluguel($idCarro, $idCliente, $prazo);
    $alugueldao->cadastrarAluguel($aluguel, $conexao);
} else {
    echo '<script>alert("Não existe cliente com CPF informado");
    window.location.href = "../../view/ListaVeiculo.php"</script>';
}

?>