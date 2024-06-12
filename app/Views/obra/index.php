<div class = "container" >
    <h2>Obra</h2>
    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Novo
    </button>
    <!--Tabela de Usuários-->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Categoria</td>
                <td>Ano</td>
                <td>ISBN</td>
                <td>Editora</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaObra as $u) : ?>
                <tr>
                    <td><?=$u['id']?></td>
                    <td>
                        <?=anchor("Obra/editar/".$u['id'],$u['titulo'])?>
                    </td>
                    <td><?=$u['categoria']?></td>
                    <td><?=$u['ano_publicacao']?></td>
                    <td><?=$u['isbn']?></td>
                    <?php
                    foreach($listaEditoras as $editora){
                        $editora[$editora['id']] = $editora['nome'];
                    }

                    ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <?=form_open("Obra/cadastrar")?> 
  <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input class= "form-control" type="text" id='titulo' name='titulo'>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input class= "form-control" type="text" id='categoria' name='categoria'>
            </div>

            <div class="form-group">
                <label for="ano_publicacao">Ano</label>
                <input class= "form-control" type="text" id='ano_publicacao' name='ano_publicacao'>
            </div>

            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input class= "form-control" type="text" id='isbn' name='isbn'>
            </div>

            <div class="form-group">
                <label for="id_editora">Editora</label>
                <select class= "form-control" type="text" id='id_editora' name='id_editora'>
                    <?php foreach($listaEditoras as $editora):?>
                        <option value="<?=$editora["id"]?>"><?=$editora["nome"]?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        
        <div class="modal-footer">
            <button type="button" class = "btn btn-secondary" data-bs-dismiss = "modal">Cancelar</button>
            <button type="submit" class = "btn btn-primary">Cadastrar</button>
        </div>

        

    </div>
  </div>
  <?=form_close()?>
</div>
</div>