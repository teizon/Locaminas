<?php

class ClienteDAO
{
    function __construct()
    {
    }

    /* Função de cadastrar um cliente */
    function salvarCliente($cliente, $conn)
    {

        $busca = mysqli_query($conn, "SELECT * FROM cliente WHERE cpf='" . $cliente->getCPF() . "' ");
        $count = mysqli_num_rows($busca);

        if ($count == 0) {
            mysqli_query($conn, "INSERT INTO cliente(nome, cpf, cnh, telefone, email) VALUES (
                '" . $cliente->getNome() . "',
                '" . $cliente->getCPF() . "',
                '" . $cliente->getCNH() . "',
                '" . $cliente->getTelefone() . "',
                '" . $cliente->getEmail() . "')");
            echo '<script>alert("Cadastrado com sucesso");
                window.location.href = "../view/TelaCliente.html"</script>';
        } else {
            echo '<script>alert("CPF já existente no sistema");
            window.location.href = "../view/CadastroCliente.html"</script>';
        }
    }


    /* Função de listar todos clientes */
    function listarCliente($conn)
    {
        $sql = "SELECT * FROM cliente ORDER BY nome ASC";
        $listar = $conn->query($sql);
        return $listar;
    }


    /* Função de excluir um cliente */
    function excluirCliente($id, $conn)
    {
        $sql = "DELETE FROM cliente where id=" . $id;
        if ($conn->query($sql) === true) {
            echo '<script>alert("Deletado com sucesso");
            window.location.href = "../view/ListaCliente.php"</script>';
        } else {
            echo '<script>alert("Erro ao deletar");
            window.location.href = "../view/ListaCliente.php"</script>';
        }
    }
}
