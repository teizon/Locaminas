<?php

class Conexao{
    private $servername = "localhost";
    private $username = "root";
    private $password = "password";
    private $bd = "locaminas";
    private $conn;

    function __construct()
    {}

    function getConexao(){
        try{
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->bd);
            return $this->conn;
        }
        catch(Exception $e){
            echo $e->getMessage();
            die();
        }
    }
}

?>



