
<div class="container">
    <div class="row">
           <h1 style = "text-align: center;">Bem-vindo a Biblioteca</h1> <br><hr>
        <div class="col-md-5 offset-md-2"><br>
          <div class='col-10'>
          <div class='form-group'>
            <h4>Faça Login para continuar</h4>
          </div>  <br>
            <?php if (session()->has('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->get('error') ?>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo base_url('login/authenticate'); ?>" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo old('email'); ?>">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div><br>
                <button type="submit" class="btn btn-dark">Entrar</button>
            </form>
            </div>
        </div>
    </div>
</div>