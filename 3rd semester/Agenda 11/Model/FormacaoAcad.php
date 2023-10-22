<?php

require_once 'ConexaoBD.php';

class FormacaoAcad
{
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    public function __construct($idusuario, $inicio, $fim, $descricao)
    {
        $this->idusuario = $idusuario;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->descricao = $descricao;
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
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO formacaoacad (idusuario, inicio, fim, descricao) 
                VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $this->idusuario, $this->inicio, $this->fim, $this->descricao);

        if ($stmt->execute()) {
            $this->id = $stmt->insert_id;
            $stmt->close();
            $conn->close();
            return true;
        } else {
            $stmt->close();
            $conn->close();
            return false;
        }
    }

    public function excluirBD()
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM formacaoacad WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $this->id);

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

    public function listaFormacoes($idusuario)
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM formacaoacad WHERE idusuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $idusuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $conn->close();

        return $result;
    }
}
