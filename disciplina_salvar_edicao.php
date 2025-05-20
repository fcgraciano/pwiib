<?php

include "conexao.php";
require_once "repository/DisciplinaRepository.php";
$repo = new DisciplinaRepository($conexao);

if( isset($_POST["id"]) && isset($_POST['nome']) )
{
    $repo->Editar($_POST['nome'],$_POST['id']);
    header('location: disciplinas.php');
}
else
{
    header('location: disciplinas.php');

}

?>