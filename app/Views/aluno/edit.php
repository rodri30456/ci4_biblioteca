<div class="container">
    <?= form_open('Aluno/salvar')?>
    <input type = "hidden" id = 'id' name = 'id' value = '<?=$aluno['id']?>'>

     <!--Editando CPF-->
        <div class = "row p-2">
            <div class= "col-2">
                <label for="cpf">CPF</label>
            </div>
            <div class = "col-10">
                <input class = 'form-control' value = '<?=$aluno['cpf']?>'  name = 'cpf' id = 'cpf' type='text'>
            </div>
        </div>

        <!--Editando Nome-->
        <div class="row p-2">
            <div class="col-2">
                <label for="nome">Nome</label>
            </div>
            <div class="col-10">
                <input class = 'form-control' value='<?=$aluno['nome']?>'  name = 'nome' id = 'nome' type='text'>
            </div>
        </div>

        <!--Editando Email-->
        <div class = "row p-2">
            <div class = "col-2">
                <label for = "email">E-mail</label>
            </div>
            <div class = "col-10">
                <input class = 'form-control' value = '<?=$aluno['email']?>' type="text" id='email' name='email'>
            </div>
        </div>

        <!--Editando Telefone-->
            <div class = "row p-2">
                <div class = "col-2">
                    <label for ="telefone">Telefone</label>
                </div>
                <div class = "col-10">
                    <input class = 'form-control' value = '<?=$aluno['telefone']?>' type = "text" id = 'telefone' name = 'telefone'>
                </div>
            </div>

        <!--Editando Turma-->    
            <div class = "row p-2">
                <div class = "col-2">
                    <label for = "turma">Turma</label>
                </div>
                <div class = "col-10">
                    <input class= 'form-control' value = '<?=$aluno['turma']?>' type="text" id = 'turma' name = 'turma'>
                </div>
            </div>

     <!--Botões de salvar, cancelar e excluir-->    
        <div class = "row p-2">

            <div class ="col">

                <div class= "btn-group w-100" role = "group">

                    <!--Cancelar-->
                    <?=anchor('Aluno/index', 'Cancelar',
                    [
                        'class'=>'btn btn-outline-secondary'
                    ])?>

                    <!--salvar-->
                    <button type="submit" class="btn btn-outline-success">Salvar</button>

                    <!--Excluir-->
                    <?=anchor('Aluno/excluir/'.$aluno['id'], 'Excluir',
                    [
                        'class'=>'btn btn-outline-danger'
                    ])?>

                </div>

            </div>

        </div>

        </div>
    <?= form_close()?>
</div>

