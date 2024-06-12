<?php

    namespace App\Controllers;

    use App\Controllers\BaseController;
    use CodeIgniter\HTTP\ResponseInterface;
    use App\Models\LivroModel;
    use App\Models\ObraModel;

    class Livro extends BaseController
    {
        private $livroModel;
        private $obraModel;
        
        public function __construct(){
            $this->obraModel = new ObraModel();
            $this->livroModel = new LivroModel();
        }
        public function index()
        {
            $livro = $this -> livroModel -> findAll();
            $obra = $this -> obraModel -> findAll();
            echo view('_partials/header');
            echo view('_partials/navbar');
            echo view('livro/index',['listaLivro' => $livro, 'listaObra' => $obra]);
            echo view('_partials/footer');
        }
        public function cadastrar(){
            $livro = $this -> request -> getPost();
            $this -> livroModel -> save($livro);
            return redirect() -> to('Livro/index');
        }
        public function editar($id){
            $dados = $this -> livroModel -> find($id);
            $obra = $this -> obraModel -> findAll();

            echo view('_partials/header');
            echo view('_partials/navbar');
            echo view('livro/edit', ['livro' => $dados, 'listaObra' => $obra]);
            echo view('_partials/footer');
        }
        public function salvar(){
            $livro = $this->request->getPost();
            $this->livroModel->save($livro);
            return redirect() -> to('Livro/index');
        }
        
        public function excluir($id){
        
            $this->livroModel->delete($id);
            return redirect() -> to('Livro/index');
        }
}


