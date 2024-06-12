<div class="container">
    <?= form_open('Livro/salvar')?>
    <input type = "hidden" id = 'id' name = 'id' value = '<?=$livro['id']?>'>

    <div class="row p-2">
        <div class="col-2">
            <label for="titulo">Disponivel</label>
        </div>
        <div class="col-10">
            <input value = '<?=$livro['disponivel']?>' class= 'form-control' name = 'disponivel' id = 'disponivel' type = "text">
        </div>
    </div>

    <div class="row p-2">
        <div class="col-2">
            <label for="status">Status</label>
        </div>
        <div class="col-10">
            <input class= 'form-control' value = '<?=$livro['status']?>' type="text" id='status' name='status'>
        </div>
    </div>

     <div class="row p-2">
        <div class="col-2">
            <label for = "id_obra">Obra</label>
        </div>
        <div class="col-10">
            <input class = 'form-control' value = '<?=$obra['id']?>' type="text" id='id_obra' name='id_obra'>
        </div>
    </div>

    <!--Botões: Cancelar, salvar e excluir-->
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                
            <!--Cancelar-->
            <?=anchor('Livro/index/', 'Cancelar',
                [
                    'class'=>'btn btn-outline-secondary'
                ])?>
            
            <!--Salvar-->        
            <button type="submit" class="btn btn-outline-success">Salvar</button>

            <!--Excluir-->
            <?=anchor('Livro/excluir/'.$livro['id'], 'Excluir',
                [
                    'class'=>'btn btn-outline-danger'
                ])?>
            </div>
        </div>
    </div>
   
    <?= form_close()?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?=form_open("Obra/adicionarAutor")?>
  <input value= "<?=$obra['id']?>" type= "hidden" name='id_obra' id='id_obra'>  
  <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de autores</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <div class="form-group">
                <label for="autor">autor</label>
                <select class= "form-control" type="text" id='id_autor' name='id_autor'>
                    <?php foreach($listaAutores as $autor):?>
                        <option value="<?=$autor["id"]?>"> <?=$autor["nome"]?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        
        <div class="modal-footer">
            <button type="button" class = "btn btn-secondary" data-bs-dismiss = "modal">Cancelar</button>
            <button type="submit" class = "btn btn-sucess">Cadastrar</button>
        </div>

        

    </div>
  </div>
  <?=form_close()?>
</div>

