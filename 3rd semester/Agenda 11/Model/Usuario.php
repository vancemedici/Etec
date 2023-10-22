<?php

require_once 'ConexaoBD.php';

class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;

    public function __construct($nome, $cpf, $email, $dataNascimento, $senha)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dataNascimento = $dataNascimento;
        $this->senha = $senha;
    }

    public function setID($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function inserirBD()
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuario (nome, cpf, email, dataNascimento, senha) 
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $this->nome, $this->cpf, $this->email, $this->dataNascimento, $this->senha);

        if ($stmt->execute()) {
            $this->id = mysqli_insert_id($conn);
            $stmt->close();
            $conn->close();
            return true;
        } else {
            $stmt->close();
            $conn->close();
            return false;
        }
    }

    public function carregarUsuario($cpf)
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM usuario WHERE cpf = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $cpf);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->id = $row['idusuario'];
            $this->nome = $row['nome'];
            $this->email = $row['email'];
            $this->dataNascimento = $row['dataNascimento'];
            $this->senha = $row['senha'];
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    public function atualizarBD()
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "UPDATE usuario SET nome = ?, email = ?, dataNascimento = ?, senha = ? WHERE idusuario = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $this->nome, $this->email, $this->dataNascimento, $this->senha, $this->id);

        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            return true;
        } else {
            $stmt->close();
            $conn->close();
            return false;
        }
    }
}
