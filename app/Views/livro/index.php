<div class = "container">
    <h2>Livro</h2>
    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cadastrar
    </button>

    <!--Tabela de Livro-->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Disponivel</td>
                <td>Status</td>
                <td>Id_obra</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaLivro as $u) : ?>
                <tr>
                    <td><?=$u['id']?></td>
                    <td>
                        <?=anchor("Livro/editar/".$u['id'],$u['disponivel'])?>
                    </td>
                    <td><?=$u['status']?></td>
                    <td><?=$u['id_obra']?></td>
                    <?php
                    foreach($listaObra as $obra){
                        $obra[$obra['id']] = $obra['titulo'];
                    }

                    ?>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?=form_open("Livro/cadastrar")?>  
  <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    
        <div class="modal-body">

            <div class="form-group">
                <label for="disponivel">Disponivel</label>
                <input class= "form-control" type="text" id='disponivel' name='disponivel'>

            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input class= "form-control" type="text" id='status' name='status'>
            </div>

            <div class="form-group">
                <label for="id_obra">Obra</label>
                <select class= "form-control" type="text" id='id_obra' name='id_obra'>
                <option value= "">Selecione uma Obra</option>
                    <?php foreach($listaObra as $obra):?>
                        <option value="<?=$obra["id"]?>"><?=$obra["titulo"]?></option>
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