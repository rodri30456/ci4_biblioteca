<div class="container">
    <?= form_open('Usuario/salvar')?>
    <input type = "hidden" id = 'id' name = 'id' value = '<?=$usuario['id']?>'>

    <div class="row p-2">
        <div class="col-2">
            <label for="nome">Nome</label>
        </div>
        <div class="col-10">
            <input value = '<?=$usuario['nome']?>' class= 'form-control' name = 'nome' id = 'nome' type = "text">
        </div>
    </div>


    <div class="row p-2">
        <div class="col-2">
            <label for="email">E-mail</label>
        </div>
        <div class="col-10">
            <input class= 'form-control' value = '<?=$usuario['email']?>' type="email" id='email' name='email'>
        </div>
    </div>

    <!--Telefone-->
    <div class="row p-2">
        <div class="col-2">
            <label for = "telefone">Telefone</label>
        </div>
        <div class="col-10">
            <input class = 'form-control' value = '<?=$usuario['telefone']?>' type="telefone" id='telefone' name='telefone'>
        </div>
    </div>

    <!--Botões: Cancelar, salvar e excluir-->
    <div class="row p-2">
        <div class="col">
            <div class="btn-group w-100" role="group">
                
            <!--Cancelar-->
            <?=anchor('Usuario/index/', 'Cancelar',
                [
                    'class'=>'btn btn-outline-secondary'
                ])?>
            
            <!--Salvar-->        
            <button type="submit" class="btn btn-outline-success">Salvar</button>

            <!--Excluir-->
            <?=anchor('Usuario/excluir/'.$usuario['id'], 'Excluir',
                [
                    'class'=>'btn btn-outline-danger'
                ])?>
            </div>
        </div>
    </div>
   
    <?= form_close()?>
</div>


