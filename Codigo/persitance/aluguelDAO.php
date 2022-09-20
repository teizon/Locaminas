<?php

class AluguelDAO{

    function construct()
    {}

    function validarAluguel($id, $conn){
        $busca = mysqli_query($conn, "SELECT * FROM aluguel WHERE idCarro='$id' AND alugado=true");
        $count = mysqli_num_rows($busca);

        if ($count == 0) {
            return true;
        } else {
            return false;
        }
    }

    function validarCliente($conexao, $cpf){
        $busca = mysqli_query($conexao, "SELECT id FROM cliente WHERE cpf='$cpf'");
        $count = mysqli_num_rows($busca);

        if($count == 1){
            $resultado = mysqli_fetch_assoc($busca);
            $idCliente = $resultado['id'];
            return $idCliente;
        } else {
            return -1;
        }
    }

    function cadastrarAluguel($aluguel, $conexao){
        $idCarro = $aluguel->getIdCarro();
        $idCliente = $aluguel->getIdCliente();
        $prazo = $aluguel->getPrazo();

        mysqli_query($conexao, "INSERT INTO aluguel(idCarro, idCliente, prazo, alugado) VALUES ('$idCarro', '$idCliente', '$prazo', true)");
        mysqli_query($conexao, "INSERT INTO aluguelDados(idCarro, idCliente, prazo, alugado) VALUES ('$idCarro', '$idCliente', '$prazo', true)");
        echo '<script>alert("Cadastrado com sucesso");
        window.location.href = "../../view/ListaAluguel.php"</script>';
    }

    function listarAluguel($conexao){
        $sql = "SELECT A.id, nome, nomeVeiculo, placa, valor, prazo
                FROM aluguel A JOIN carroDados B JOIN clienteDados C
                WHERE A.idCarro = B.id AND A.idCliente = C.id ";
        $listar = $conexao->query($sql);
        return $listar;
    }

    function concluirAluguel($id, $conexao){
        $busca = mysqli_query($conexao, "SELECT * FROM aluguel WHERE alugado = true and id='$id'");
        $count = mysqli_num_rows($busca);
        if($count == 1){
            mysqli_query($conexao, "UPDATE aluguel SET alugado = false where id = '$id';");
            mysqli_query($conexao, "UPDATE aluguelDados SET alugado = false where id = '$id';");
            echo '<script>alert("Aluguel finalizado com sucesso");
            window.location.href = "../../view/ListaAluguel.php"</script>';
        } else {
            echo '<script>alert("Aluguel já estava finalizado");
            window.location.href = "../../view/ListaAluguel.php"</script>';
        }
    }

    function excluirAluguel($id, $conn){
        $busca = mysqli_query($conn, "SELECT * FROM aluguel WHERE id='$id' AND alugado=false");
        $count = mysqli_num_rows($busca);
        if ($count == 1) {
            mysqli_query($conn ,"DELETE FROM aluguel where id='$id'");
            echo '<script>alert("Deletado com sucesso");
            window.location.href = "../../view/ListaAluguel.php"</script>';
        } else {
            echo '<script>alert("Aluguel ainda em andamento");
            window.location.href = "../../view/ListaAluguel.php"</script>';
        }
    }
}