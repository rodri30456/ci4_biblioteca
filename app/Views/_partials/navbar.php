<nav class="navbar navbar-expand-lg bg-dark-subtle mb-2" data-bs-theme="dark">
  <div class="container">

    <?=anchor("Usuario/index","Biblioteca",['class' => 'navbar-brand'])?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>