<?php
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'repository/DisciplinaRepository.php';

    //Crio um objeto do tipo DisciplinaRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new DisciplinaRepository($conexao);

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $obj = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos usuarios do banco de dados
        $obj = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de disciplinas</b>
            </div>
            <div class="card-body">
             <form action="disciplinas.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="disciplina_novo.php" class="btn btn-success">
                                Novo
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                </div>
            </form>   

              <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           
                            foreach ($obj as $row) {
                                echo "<tr>
                                        <td>".$row['ID']."</td>
                                        <td>".$row['DISCIPLINA']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='disciplina_excluir.php?id=".$row['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='disciplina_editar.php?id=".$row['ID']."'>Editar</a>
                                        </td> 
                                      </tr>";
                            }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
<?php

    include "rodape.php"; 
?>