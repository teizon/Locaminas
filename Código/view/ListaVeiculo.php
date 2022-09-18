<?php

include_once "../persitance/conexao.php";
include_once "../persitance/carroDAO.php";

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$carroDao = new carroDAO();
$resultado = $carroDao->listarCarro($conexao);

?>

<!DOCTYPE html>
<html lang="en" style=" width: 100vw; height: 100vh; margin: 0; padding: 0; background: url('../assets/img/bg.png') no-repeat; background-size: cover;">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <head>
  <title>Tela Listagem</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>

<body style=" height: 100vh; width: 100vw; margin: 0; padding: 0; background: rgba(255, 255, 255, 0); ">
  <header class="d-flex justify-content-between" style="height: 10vh">
    <div>
      <a href="../view/home.html">
        <i class="fas fa-home" style="color: rgb(255, 255, 255); font-size: 3rem; padding: 35px" href="login.html"> </i>
      </a>
    </div>
    <div>
      <img src="../assets/img/logo.png" style="width: 60px; margin-top: 20px; margin-bottom: 20px" />
      <img src="../assets/img/locaminas.png" style="margin-top: 20px; margin-left: 20px; margin-bottom: 20px" />
    </div>
    <div>
      <a href="../view/TelaVeiculo.html">
        <i class="fas fa-arrow-left" style=" color: rgb(255, 255, 255); font-size: 3rem; text-align: center; padding: 35px;"></i>
      </a>
    </div>
  </header>
  <div class="d-flex flex-column justify-content-evenly align-items-center" style="width: 100vw;height: 90vh;margin: 0;">
    <input type="text" id="myInput" onkeyup="myFunction()" style="width: 80%;background: url('../assets/img/searchicon.png') 5px / auto no-repeat, #ffffff;height: 30px;font-size: 16px;padding: 12px 20px 12px 40px;border: 1px solid #dddddd;" placeholder="Search for names" />
    <div class="table-responsive text-center border rounded-0" style=" width:80%; height:80%; background-color: beige;">
      <table class="table table-bordered" id="myTable">
        <thead style="width:100% ;">
          <tr>
            <th style="width: 20%;">Nome</th>
            <th style="width: 13%;">Placa</th>
            <th style="width: 13%;">Combustivel</th>
            <th style="width: 13%;">Cor</th>
            <th style="width: 13%;">Ano</th>
            <th style="width: 13%;">Valor</th>
            <th style="width: 15%;">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (mysqli_num_rows($resultado)) {
            foreach ($resultado as $carro) {
          ?>
              <tr>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;"><?= $carro['nomeVeiculo']; ?></td>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;"><?= $carro['placa']; ?></td>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;"><?= $carro['combustivel']; ?></td>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;"><?= $carro['cor']; ?></td>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;"><?= $carro['ano']; ?></td>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;"><?= $carro['valor']; ?></td>
                <td style="color: var(--bs-table-active-color);font-size: 20px;font-weight: bold;">
                  <a href="../controller/Aluguel/ValidaAluguel.php?id=<?= $carro['id']; ?>" class="btn btn-primary btn-sm">Alugar</a>
                  <a href="../view/TelaEditarCarro.php?id=<?= $carro['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                  <form action="../controller/Carro/ExcluirCarro.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_carro" value="<?= $carro['id']; ?>" class="btn btn-danger btn-sm">Deletar</button>
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/scripts/script.js"></script>
</body>

</html>