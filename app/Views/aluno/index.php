<div class = "container">
    <h2>Aluno</h2>
    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Novo
    </button>
    <!--Tabela de Alunos-->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>CPF</td>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Telefone</td>
                <td>Turma</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaAluno as $a) : ?>
                <tr>
                    <td><?=$a['id']?></td>
                    <td><?=$a['cpf']?></td>
                    <td>
                        <?=anchor("Aluno/editar/".$a['id'], $a['nome'])?>
                    </td>
                    <td><?=$a['email']?></td>
                    <td><?=$a['telefone']?></td>
                    <td><?=$a['turma']?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <!--Modal Fade-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <?=form_open("Aluno/cadastrar")?>  
            <div class="modal-dialog">
            <div class="modal-content bg-dark text-light">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

        <!--Modal Body-->
        <div class="modal-body">

            <!--CPF-->
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id='cpf' name='cpf'>
            </div>

            <!--Nome-->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class= "form-control" type="text" id='nome' name='nome'>
            </div>

            <!--Email-->
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class= "form-control" type="text" id='email' name='email'>
            </div>

            <!--Telefone-->
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class= "form-control" type="text" id='telefone' name='telefone'>
            </div>

            <!--Turma-->
            <div class="form-group">
                <label for="turma">Turma</label>
                <input type="text" class="form-control" id='turma' name='turma'>
            </div>

           
            <!--Modal Footer-->            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        

    </div>
  </div>
  