<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="disciplina_salvar.php" method="post">
            <br>
            <label>Nome</label>
            <input name="nome" type="text" class="form-control" />
            <br/>
            <button name="salvar_disciplina" type="submit" class="btn btn-primary">
                Salvar
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>