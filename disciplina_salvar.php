<?php

include "conexao.php";
require_once "repository/ReferenciaRepository.php";
$repo = new ReferenciaRepository($conexao);


if( isset($_POST["salvar_disciplina"]) )
{
  
    $repo->Inserir($_POST['nome']);
    header('location: disciplinas.php');
}
else
{
    header('location: disciplinas.php');

}

?>