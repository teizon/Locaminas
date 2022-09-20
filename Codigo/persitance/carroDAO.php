<?php

class CarroDAO
{
    function __construct()
    {}

    /* Função de cadastrar um carro */
    function salvarCarro($carro, $conn){
        $busca = mysqli_query($conn, "SELECT * FROM carro WHERE placa='" . $carro->getPlaca() . "' ");
        $count = mysqli_num_rows($busca);

        if ($count == 0) {
            mysqli_query($conn, "INSERT INTO carro(nomeVeiculo, placa, combustivel, cor, ano, valor) VALUES (
                '" . $carro->getNomeVeiculo() . "',
                '" . $carro->getPlaca() . "',
                '" . $carro->getCombustivel() . "',
                '" . $carro->getCor() . "',
                '" . $carro->getAno() . "',
                '" . $carro->getValor() . "')");
            mysqli_query($conn, "INSERT INTO carroDados(nomeVeiculo, placa, combustivel, cor, ano, valor) VALUES (
                '" . $carro->getNomeVeiculo() . "',
                '" . $carro->getPlaca() . "',
                '" . $carro->getCombustivel() . "',
                '" . $carro->getCor() . "',
                '" . $carro->getAno() . "',
                '" . $carro->getValor() . "')");
                echo '<script>alert("Cadastrado com sucesso");
                window.location.href = "../../view/ListaVeiculo.php"</script>';
                return true;
        } else {
            echo '<script>alert("Placa já existente no sistema");
            window.location.href = "../../view/CadastroVeiculo.html"</script>';
            return false;
        }
    }


    /* Função de listar todos carros */
    function listarCarro($conn)
    {
        $sql = "SELECT * FROM carro ORDER BY nomeVeiculo ASC";
        $listar = $conn->query($sql);
        return $listar;
    }


    /* Função de excluir um carro */
    function excluirCarro($id, $conn){
        $busca = mysqli_query($conn, "SELECT * FROM aluguel WHERE idCarro='$id'");
        $count = mysqli_num_rows($busca);
        if ($count >= 1) {
            $busca = mysqli_query($conn, "SELECT * FROM aluguel WHERE idCarro='$id' and alugado = true");
            $count = mysqli_num_rows($busca);
            if($count == 0){
                mysqli_query($conn ,"DELETE FROM carro where id='$id'");
                echo '<script>alert("Deletado com sucesso");
                window.location.href = "../../view/ListaVeiculo.php"</script>';
                return true;
            } else {
                echo '<script>alert("Carro atualmente em aluguel");
                window.location.href = "../../view/ListaVeiculo.php"</script>';
                return false;
            }
        } else {
            mysqli_query($conn ,"DELETE FROM carro where id='$id'");
            echo '<script>alert("Erro ao deletar");
            window.location.href = "../../view/ListaVeiculo.php"</script>';
            return true;
        }
    }

    function editarCarro($carro, $id, $conn){
        $nomeVeiculo = $carro->getNomeVeiculo();
        $placa = $carro->getPlaca();
        $combustivel = $carro->getCombustivel();
        $cor = $carro->getCor();
        $ano = $carro->getAno();
        $valor = $carro->getValor();

        $busca = mysqli_query($conn, "SELECT * FROM carro WHERE placa='$placa' and id='$id'");
        $count = mysqli_num_rows($busca);

        if ($count === 1){
            $sql = "UPDATE carro SET nomeVeiculo='$nomeVeiculo', placa='$placa', combustivel='$combustivel', cor='$cor', ano='$ano', valor='$valor' WHERE id='$id' ";
            mysqli_query($conn, "UPDATE carroDados SET nomeVeiculo='$nomeVeiculo', placa='$placa', combustivel='$combustivel', cor='$cor', ano='$ano', valor='$valor' WHERE id='$id' ");
            if ($conn->query($sql) === true) {
                echo '<script>alert("Editado com sucesso");
                window.location.href = "../../view/ListaVeiculo.php"</script>';
                return true;
            }
            return false;
        } else if($count === 0) {
            $busca = mysqli_query($conn, "SELECT * FROM carro WHERE placa='$placa'");
            $count = mysqli_num_rows($busca);
            if($count == 0){
                $sql = "UPDATE carro SET nomeVeiculo='$nomeVeiculo', placa='$placa', combustivel='$combustivel', cor='$cor', ano='$ano', valor='$valor' WHERE id='$id' ";
                mysqli_query($conn, "UPDATE carroDados SET nomeVeiculo='$nomeVeiculo', placa='$placa', combustivel='$combustivel', cor='$cor', ano='$ano', valor='$valor' WHERE id='$id' ");
                if ($conn->query($sql) === true) {
                    echo '<script>alert("Carro editado com sucesso");
                    window.location.href = "../../view/ListaVeiculo.php"</script>';
                    return true;
                }
                return false;
            } else {
                echo '<script>alert("Placa já existente no sistema");
                window.location.href = "../../view/ListaVeiculo.php"</script>';
                return false;
            }
        } else {
            echo '<script>alert("Erro ao editar");
            window.location.href = "../../view/ListaVeiculo.php"</script>';
            return false;
        }

    }
}
