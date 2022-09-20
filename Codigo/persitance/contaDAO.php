<?php

class ContaDAO{

    function construct()
    {}

    function validarUsuario($conta, $conn){
        $usuario = $conta->getUsuario();
        $senha = $conta->getSenha();
        $busca = mysqli_query($conn, "SELECT * FROM funcionario WHERE usuario='$usuario' and senha='$senha' ");
        $count = mysqli_num_rows($busca);
        if($count == 1){
            echo '<script>
            window.location.href = "../../view/home.html"</script>';
        } else {
            echo '<script>alert("Email ou senha incorreta");
                window.location.href = "../../index.html"</script>';
        }
    }
}