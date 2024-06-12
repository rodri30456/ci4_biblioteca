<div class="container">
    <?= form_open('Editora/salvar')?>
    <input type = "hidden" id = 'id' name = 'id' value = '<?=$editora['id']?>'>

        
        <div class="row p-2">
            <div class="col-2">
                <label for="nome">Nome</label>
            </div>
            <div class="col-10">
                <input value = '<?=$editora['nome']?>' class= 'form-control' name = 'nome' id = 'nome' type="text">
            </div>
        </div>

        <div class="row p-2">
            <div class="col-2">
                <label for="email">E-mail</label>
            </div>
            <div class="col-10">
                <input class= 'form-control' value = '<?=$editora['email']?>' type="email" id='email' name='email'>
            </div>
        </div>


        <div class="row p-2">
            <div class="col-2">
                <label for="telefone">Telefone</label>
            </div>
            <div class="col-10">
                <input value = '<?=$editora['telefone']?>' type="telefone" id='telefone' name='telefone' class='form-control'>
            </div>
        </div>

        <div class="row p-2">
            <div class="col">
                <div class="btn-group w-100" role="group">

                <!--Cancelar--> 
                <?=anchor('Editora/index', 'Cancelar',
                    [
                        'class'=>'btn btn-outline-secondary'
                    ])?>

                    <!--Salvar-->
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                </div>
            </div>
        </div>

        <div class="row p-2">
            <div class="col">
                <div class="btn-group w-100" role="group">
                    <!--Excluir-->
                    <?=anchor('Editora/excluir/'.$editora['id'], 'Excluir',
                    [
                        'class'=>'btn btn-outline-danger'
                    ])?>
                </div>
            </div>
    </div>
    <?= form_close()?>
</div>


