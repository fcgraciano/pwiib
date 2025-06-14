<?php
    if(!isset($_GET['id']) || empty($_GET['id']) )
    {
        header("location: perguntas.php?erro=Pergunta não encontrada");
    }
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'repository/AlternativaRepository.php';
    require_once 'repository/PerguntaRepository.php';
    $repo_pergunta = new PerguntaRepository($conexao);
    $repo_alternativa = new AlternativaRepository($conexao);
    $pergunta = $repo_pergunta->buscarPorId($_GET['id']);
    $alternativas = $repo_alternativa->buscarTodosPorPergunta($_GET['id']);
?>

<div class="row">
    <div class="col-6 offset-3">
        <div class="card">    
            <div class="card-header">
                Pergunta: <?php echo $pergunta["PERGUNTA"]; ?>
            </div>
            <div class="card-body">
                <?php
                    foreach ($alternativas as $key => $value) {
                        echo '<input type="radio"/>';
                        echo $value["ALTERNATIVA"];
                        echo "<br>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<?php
    include "rodape.php";
?>