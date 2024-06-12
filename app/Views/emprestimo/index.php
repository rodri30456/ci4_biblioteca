<div class="container">
    <h2>Emprestimo</h2>
        <!-- Button do Modal -->
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Novo
        </button>
        <!-- Tabela de Usuario -->
    <table class="table">
        <thead>
        <tr>
            <td>ID</td>
            <td>DATA DE INICIO</td>
            <td>DATA DO FIM</td>
            <td>DATA DO PRAZO</td>
            <td>LIVRO</td>
            <td>ALUNO</td>
            <td>USUARIO</td>
        </tr>
        </thead>
        <tbody>
            <?php foreach($listaEmprestimo as $em) :?>
                <tr>
                    <td>
                        <?=$em['id']?>
                    </td>
                    <td>
                        <?=anchor("Emprestimo/editar/".$em['id'],$em['data_inicio'])?>
                    </td>
                    <td>
                        <?=$em['data_fim']?>
                    </td>
                    <td>
                        <?=$em['data_prazo']?>
                    </td>
                    <td>
                    <?php
                        foreach($listaLivro as $livro){
                            $livros[$livro['id']] = $livro['id'];
                        }
                        ?>
                        <?=$livros[$em['id_livro']]?>
                    </td>
                    <td>
                    <?php
                        foreach($listaAluno as $aluno){
                            $alunos[$aluno['id']] = $aluno['nome'];
                        }
                        ?>
                        <?=$alunos[$em['id_aluno']]?>
                    </td>
                    <td>
                    <?php
                        foreach($listaUsuario as $usuario){
                            $usuarios[$usuario['id']] = $usuario['nome'];
                        }
                        ?>
                        <?=$usuarios[$em['id_usuario']]?>
                    </td>
                </tr>
            <?php endforeach ?>  
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?=form_open("Emprestimo/cadastrar")?> 
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="data_inicio">Data Inicial</label>
                    <input class='form-control' type="text" id='data_inicio' name='data_inicio'>
                </div>
                <div class="form-group">
                    <label for="data_fim">Data Final</label>
                    <input class='form-control' type="text" id='data_fim' name='data_fim'>
                </div>
                <div class="form-group">
                    <label for="data_prazo">Prazo</label>
                    <input class='form-control' type="text" id='data_prazo' name='data_prazo'>
                </div>
                <div class="form-group">
                    <label for="livro">Livro:</label>
                    <select class='form-select' name="id_livro" id="id_livro" required>
                        <option>Selecione um Livro</option>
                        <?php foreach($listaLivro as $livro) : ?>
                            <option value="<?=$livro['id']?>"><?=$livro['id']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="aluno">Aluno:</label>
                    <select class='form-select' name="id_aluno" id="id_aluno" required>
                        <option>Selecione um Aluno</option>
                        <?php foreach($listaAluno as $aluno) : ?>
                            <option value="<?=$aluno['id']?>"><?=$aluno['nome']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <select class='form-select' name="id_usuario" id="id_usuario" required>
                        <option>Selecione um Usuario</option>
                        <?php foreach($listaUsuario as $usuario) : ?>
                            <option value="<?=$usuario['id']?>"><?=$usuario['nome']?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </div>
        <?=form_close()?>
    </div>
</div>