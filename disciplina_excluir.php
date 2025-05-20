<?php
include "conexao.php";
require_once "repository/DisciplinaRepository.php";
$repo = new DisciplinaRepository($conexao);

if( isset($_GET["id"]) && !empty($_GET["id"]) )
{
    $obj = $repo->buscarPorId($_GET["id"]);
    if($usuario != null)
    {
        $repo->excluirUsuario($_GET["id"]);
    }
    header('location: disciplinas.php');
}
else
{
    header('location: disciplinas.php?erro=Id não encontrado');
}

?>