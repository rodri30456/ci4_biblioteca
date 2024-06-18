
<div class="container">
    <div class="row">
           <h1>Bem-vindo a Bibliotaca da EEEP Walter Ramos</h1> <br>
        <div class="col-md-5 offset-md-2"><br>
          <div class='col-10'>
            <h2>Faça Login Para Continuar</h2>
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