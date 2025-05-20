<?php
class ReferenciaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $resultado = $this->conexao->query(
            "SELECT * FROM referencias");

        $obj = [];
        while ($row = $result->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM referencias WHERE NOME like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $obj = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM referencias WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($nome)
    {
        $sql = "INSERT INTO referencias (nome) 
                VALUES (?)";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $nome);
                $stmt->execute();
    }

    public function Editar($nome, $id)
    {
        $sql = "UPDATE referencias set nome = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $nome , $id);
                $stmt->execute();
    }

    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM referencias where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}