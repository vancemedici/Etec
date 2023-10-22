<?php

require_once 'ConexaoBD.php';

class ExperienciaProfissional
{
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

    public function __construct($idusuario, $inicio, $fim, $empresa, $descricao)
    {
        $this->idusuario = $idusuario;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->empresa = $empresa;
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

    public function listaExperiencias($idusuario)
    {
        $conn = new ConexaoBD();
        $conn = $conn->conectar();
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM experienciaProfissional WHERE idusuario = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $idusuario);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $conn->close();

        return $result;
    }
}
