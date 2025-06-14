<?php
class AlternativaRepository {
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function buscarTodosPorPergunta($id_pergunta) {
        $prepare = $this->conexao->prepare(
            "SELECT * FROM ALTERNATIVAS where ID_PERGUNTA = ?");
        $prepare->bind_param("i", $id_pergunta);
        $prepare->execute();
        $resultado = $prepare->get_result();
        $obj = [];
        while ($row = $resultado->fetch_assoc()) {
            array_push($obj, $row);
        }
        return $obj;
    }
    
    public function Inserir($id_pergunta, $correta, $alternativa)
    {
        $sql = "INSERT INTO ALTERNATIVAS (ID_PERGUNTA, CORRETA, ALTERNATIVA) VALUES (?,?,?)";
                $stmt = $this->conexao->prepare($sql);
                $stmt->bind_param("iis", $id_pergunta, $correta, $alternativa);
                $stmt->execute();
    }

    public function Excluir($id)
    {
        $sql = "DELETE FROM ALTERNATIVAS where id = ?";
        $preparar = $this->conexao->prepare($sql);
        $preparar->bind_param("i",$id);
        $preparar->execute();
    }

}