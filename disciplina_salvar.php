<?php

include "conexao.php";
require_once "repository/DisciplinaRepository.php";
$repo = new DisciplinaRepository($conexao);


if( isset($_POST["salvar_disciplina"]) )
{
    $repo->Inserir($_POST['nome']);
    header('location: disciplinas.php?sucesso=cadastrado com sucesso');
}
else
{
    header('location: disciplinas.php?erro=formulario inválido');
}

?>