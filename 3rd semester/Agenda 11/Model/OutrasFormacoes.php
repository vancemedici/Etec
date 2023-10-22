<?php

require_once 'ConexaoBD.php';

class FormacaoAcad
{
    private $idoutrasformacoes;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;
    private $id;

    public function __construct($idusuario, $inicio, $fim, $descricao)
    {
        $this->idusuario = $idusuario;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->descricao = $descricao;
    }

    public function inserirBD()
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao)
        VALUES ('" . $this->idusuario . "', '" . $this->inicio . "', '" . $this->fim . "', '" . $this->descricao . "')";

        if ($conn->query($sql) === TRUE) {
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }

    public function excluirBD($idoutrasformacoes)
    {
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes = '" . $idoutrasformacoes . "'";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }

    public function listaFormacoes($idusuario)
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM outrasformacoes WHERE idusuario = '" . $idusuario . "'";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
