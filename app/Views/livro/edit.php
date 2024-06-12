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
    <!--Pegando a Obra-->
    <div class="row p-2">
        <div class="col-2">
            <label for="obra">Obra</label>
        </div>
        <div class="col-10">
            <select class= "form-control" type="text" id='id_obra' name='id_obra'>
                <?php foreach($listaObra as $obra):?>
                    <option value="<?=$obra["id"]?>"><?=$obra["titulo"]?></option>
                <?php endforeach ?> 
                </select>
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
