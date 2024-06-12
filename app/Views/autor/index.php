<div class = "container">
    <h2>Autor</h2>
    <button type="button" class="btn btn-dark bg-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Novo
    </button>
    <!--Tabela de Autores-->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaAutor as $a) : ?>
                <tr>
                    <td><?=$a['id']?></td>
                    <td>
                        <?=anchor("Autor/editar/".$a['id'], $a['nome'])?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?=form_open("Autor/cadastrar")?>  
  <div class="modal-dialog">
        <div class="modal-content bg-dark text-light">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
            <button type="button" class="btn-close danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input class= "form-control" type="text" id='nome' name='nome'>
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