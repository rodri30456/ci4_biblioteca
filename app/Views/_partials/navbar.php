<nav class="navbar navbar-expand-lg bg-dark-subtle mb-2" data-bs-theme="dark">
  <div class="container">

        
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
      <li class="nav-item">
          <?=anchor("Usuario/index","Usuario",['class' => 'nav-link active'])?>
        </li>

        <li class="nav-item">
        <?=anchor("Editora/index","Editora",['class' => 'nav-link active'])?>
        </li>


        <li class="nav-item">
          <?=anchor("Autor/index","Autor",['class' => 'nav-link active'])?>
        </li>
        
        <li class="nav-item">
          <?=anchor("Aluno/index","Aluno",['class' => 'nav-link active'])?>
        </li>


        <li class="nav-item">
          <?=anchor("Obra/index","Obra",['class' => 'nav-link active'])?>
        </li>

        <li class="nav-item">
          <?=anchor("Livro/index","Livro",['class' => 'nav-link active'])?>
        </li>

        <li class="nav-item">
          <?=anchor("Emprestimo/index","Emprestimo",['class' => 'nav-link active'])?>
        </li>
      </ul>
      <?=anchor('Login/logout/', 'Sair',
                [
                    'class'=>'btn btn-outline-danger'
                ])?>
    </div>
  </div>
</nav>