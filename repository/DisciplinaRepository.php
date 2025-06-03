<?php
class DisciplinaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodos() {
        $resultado = $this->conexao->query(
            "SELECT * FROM disciplinas");

        $obj = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }

    public function Pesquisar($busca)
    {
        $sql = "SELECT * FROM disciplinas WHERE DISCIPLINA like '%$busca%' ";
        $resultado = $this->conexao->query($sql);
        $obj = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }
   
    public function buscarPorId($id) {
        $stmt = $this->conexao->prepare(
            "SELECT * FROM disciplinas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $resultado = $stmt->get_result();
        return $resultado->fetch_assoc();
    }
    public function Inserir($DISCIPLINA)
    {
        $sql = "INSERT INTO disciplinas (DISCIPLINA) VALUES (?)";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("s", $DISCIPLINA);
                $stmt->execute();
               
    }

    public function Editar($DISCIPLINA, $id)
    {
        $sql = "UPDATE disciplinas set DISCIPLINA = ? where ID = ?";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("si", $DISCIPLINA , $id);
                $stmt->execute();
    }

    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM disciplinas where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}