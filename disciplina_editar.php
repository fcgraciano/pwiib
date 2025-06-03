<?php 
include "conexao.php";
require_once "repository/DisciplinaRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new DisciplinaRepository($conexao);
    $obj = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: disciplinas.php');
}
?>
<br />
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Disciplina</div>
            <div class="card-body">
                <form action="disciplina_salvar_edicao.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $obj['ID'] ?>"
                            class="form-control"
                            name="id"
                            readonly 
                             />
                    <br />
                    <label>Nome</label>
                    <input type="text"
                            value="<?php echo $obj['DISCIPLINA'] ?>"
                            class="form-control"
                            name="nome"
                             />
                    <br />
                  
                    <button class="btn btn-primary" type="submit">
                            Salvar 
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>

