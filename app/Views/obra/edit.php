<div class="container">
    <?= form_open('Obra/salvar')?>
    <input type = "hidden" id = 'id' name = 'id' value = '<?=$obra['id']?>'>

    <div class="row p-2">
        <div class="col-2">
            <label for="titulo">Titulo</label>
        </div>
        <div class="col-10">
            <input value = '<?=$obra['titulo']?>' class= 'form-control' name = 'titulo' id = 'titulo' type = "text">
        </div>
    </div>


    <div class="row p-2">
        <div class="col-2">
            <label for="isbn">ISBN</label>
        </div>
        <div class="col-10">
            <input class= 'form-control' value = '<?=$obra['isbn']?>' type="text" id='isbn' name='isbn'>
        </div>
    </div>

    <!--Categoria-->
    <div class="row p-2">
        <div class="col-2">
            <label for = "categoria">Categoria</label>
        </div>
        <div class="col-10">
            <input class = 'form-control' value = '<?=$obra['categoria']?>' type="categoria" id='categoria' name='categoria'>
        </div>
    </div>


     <!--Ano_publicação-->
     <div class="row p-2">
        <div class="col-2">
            <label for = "ano_publicacao">Ano de Publicação</label>
        </div>
        <div class="col-10">
            <input class = 'form-control' value = '<?=$obra['ano_publicacao']?>' type="text" id='ano_publicacao' name='ano_publicacao'>
        </div>
    </div>


     <!--id_editora-->
     <div class="row p-2">
        <div class="col-2">
            <label for = "id_editora">ID</label>
        </div>
        <div class="col-10">
            <input class = 'form-control' value = '<?=$obra['id_editora']?>' type="text" id='id_editora' name='id_editora'>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-2">
            <label for="autores">Autores</label>
        </div>

        <div class="col-10">
        <?php
                $autores;
                foreach($listaAutores as $autor){
                    $autores[$autor['id']] = $autor['nome'];
                }
            ?>
            <?php foreach($listaAutoresObras as $lao) : ?>
                <?php if($lao['id_obra'] == $obra['id']):?>
                    <div><?=$autores[$lao['id_autor']]?></div>
                <?php endif ?>
            <?php endforeach ?>
            <!-- Button adicionar autor da obra-->
            <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Adicionar... 
                </button>
            </div>
        </div>
    </div>

    <!--Botões: Cancelar, salvar e excluir-->
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                
            <!--Cancelar-->
            <?=anchor('Obra/index/', 'Cancelar',
                [
                    'class'=>'btn btn-outline-secondary'
                ])?>
            
            <!--Salvar-->        
            <button type="submit" class="btn btn-outline-success">Salvar</button>

            <!--Excluir-->
            <?=anchor('Obra/excluir/'.$obra['id'], 'Excluir',
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
            <button type="submit" class = "btn btn-success">Cadastrar</button>
        </div>

        

    </div>
  </div>
  <?=form_close()?>
</div>

