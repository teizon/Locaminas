<?php
include_once "../persitance/conexao.php";
include_once "../model/carro.php";
include_once "../persitance/carroDAO.php";

$conexao = new Conexao();
$conexao = $conexao->getConexao();

$id = mysqli_real_escape_string($conexao, $_GET['id']);
$query = "SELECT * FROM carro WHERE id='$id'";
$query_run = mysqli_query($conexao, $query);
$carro = mysqli_fetch_array($query_run);
?>



<!DOCTYPE html>
<html
  lang="en"
  style="
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
    background: url('../assets/img/bg.png') no-repeat;
    background-size: cover;
  "
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />
    <title>Tela Editar</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
  </head>

  <body
    style="
      height: 100vh;
      width: 100vw;
      margin: 0;
      padding: 0;
      background: rgba(255, 255, 255, 0);
    "
  >
    <header class="d-flex justify-content-between" style="height: 10vh">
      <div>
        <a href="home.html"
          ><i
            class="fas fa-home"
            style="color: rgb(255, 255, 255); font-size: 3rem; padding: 35px"
            href="login.html"
          ></i
        ></a>
      </div>
      <div>
        <img
          src="../assets/img/logo.png"
          style="width: 60px; margin-top: 20px; margin-bottom: 20px"
        /><img
          src="../assets/img/locaminas.png"
          style="margin-top: 20px; margin-left: 20px; margin-bottom: 20px"
        />
      </div>
      <div>
        <a href="ListaVeiculo.php"
          ><i
            class="fas fa-arrow-left"
            style="
              color: rgb(255, 255, 255);
              font-size: 3rem;
              text-align: center;
              padding: 35px;
            "
          ></i
        ></a>
      </div>
    </header>
    <div
      class="d-inline-flex flex-row justify-content-evenly align-items-center align-self-center"
      style="width: 100vw; height: 90vh; margin: 0"
    >
      <div style="width: 520px">
        <form
          action="../controller/Carro/EditarCarro.php"
          method="post"
          autocomplete="off"
        >
          <input
            type="hidden"
            name="id"
            value="<?= $carro['id']; ?>"
          />
          <input
            class="form-control"
            type="text"
            style="
              width: 500px;
              height: 54px;
              border-style: none;
              border-radius: 50px;
              font-size: 22px;
              padding: 6px 20px;
              margin: 10px;
            "
            placeholder="Nome"
            name="nomeVeiculo"
            value="<?= $carro['nomeVeiculo']; ?>"
            required=""
          /><input
            class="form-control"
            type="text"
            style="
              width: 500px;
              height: 54px;
              border-style: none;
              border-radius: 50px;
              font-size: 22px;
              padding: 6px 20px;
              margin: 10px;
            "
            placeholder="Placa"
            name="placa"
            value="<?= $carro['placa']; ?>"
            pattern="[A-Z]{3}[-][0-9]{4}"
            title="ABC-1234"
            required=""
          /><select
            class="form-select"
            type="text"
            style="
              width: 500px;
              height: 54px;
              border-style: none;
              border-radius: 50px;
              font-size: 22px;
              padding: 6px 20px;
              margin: 10px;
            "
            placeholder="Combustivel"
            name="combustivel"
            value="<?= $carro['combustivel']; ?>"
            required=""
            >
            <option value="Diesel">Diesel</option>
            <option value="Gasolina">Gasolina</option>
            <option value="Etanol">Etanol</option>
            <option value="Flex">Flex</option>
            <option value="Eletrico">Eletrico</option>
          /><input
            class="form-control"
            type="text"
            style="
              width: 500px;
              height: 54px;
              border-style: none;
              border-radius: 50px;
              font-size: 22px;
              padding: 6px 20px;
              margin: 10px;
            "
            placeholder="Cor"
            name="cor"
            value="<?= $carro['cor']; ?>"
            required=""
          /><input
            class="form-control"
            type="number"
            style="
              width: 500px;
              height: 54px;
              border-style: none;
              border-radius: 50px;
              font-size: 22px;
              padding: 6px 20px;
              margin: 10px;
            "
            placeholder="Ano"
            name="ano"
            min="1985"
            max="2025"
            value="<?= $carro['ano']; ?>"
            required=""
          /><input
            class="form-control"
            type="number"
            style="
              width: 500px;
              height: 54px;
              border-style: none;
              border-radius: 50px;
              font-size: 22px;
              padding: 6px 20px;
              margin: 10px;
            "
            placeholder="Valor"
            name="valor"
            step="0.01"
            value="<?= $carro['valor']; ?>"
            required=""
          />
          <div class="d-flex flex-row justify-content-center">
            <button
              class="btn btn-primary text-center"
              type="submit"
              style="
                width: 260px;
                height: 54px;
                border-radius: 50px;
                background: rgba(255, 255, 255, 0);
                color: rgb(255, 255, 255);
                font-size: 22px;
                text-align: left;
                padding: 6px 20px;
                border: 4px solid rgb(255, 255, 255);
                margin: 10px;
              "
            >EDITAR</button>
          </div>
        </form>
      </div>
      <img src="../assets/img/jeep.png" style="width: 400px" />
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
