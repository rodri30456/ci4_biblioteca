<div class="container">
    <?= form_open('Autor/salvar')?>
    <input type = "hidden" id = 'id' name = 'id' value = '<?=$autor['id']?>'>

    <div class="row p-2">
        <div class="col-4">
            <label for="nome">Nome</label>
        </div>
        <div class="col-3">
            <input value = '<?=$autor['nome']?>' class= 'form-control' name = 'nome' id = 'nome' type="text">
        </div>
    </div>
    
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                
            <?=anchor('Autor/index', 'Cancelar',
                    [
                        'class'=>'btn btn-outline-secondary'
                    ])?>


                <button type="submit" class="btn btn-outline-success">Salvar</button>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                <?=anchor('Autor/excluir/'.$autor['id'], 'Excluir',
                [
                    'class'=>'btn btn-outline-danger'
                ])?>
            </div>
        </div>
    </div>
    <?= form_close()?>
</div>