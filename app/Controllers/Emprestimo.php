<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EmprestimoModel;
use App\Models\LivroModel;
use App\Models\UsuarioModel;
use App\Models\AlunoModel;


class Emprestimo extends BaseController
{
    private $emprestimoModel;
    private $livroModel;
    private $usuarioModel;
    private $alunoModel;
    
    public function __construct(){
        $this->emprestimoModel = new EmprestimoModel();
        $this->alunoModel = new AlunoModel();
        $this->livroModel = new LivroModel();
        $this->usuarioModel = new UsuarioModel();
        

    }
    public function index()
    {
        $emprestimo = $this -> emprestimoModel -> findall();
        $livro = $this -> livroModel -> findAll();
        $aluno = $this -> alunoModel -> findAll();
        $usuario = $this -> usuarioModel -> findAll();

        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('emprestimo/index',['listaEmprestimo' => $emprestimo,'listaLivro' => $livro, 'listaAluno' => $aluno, 'listaUsuario'=> $usuario,]);
        echo view('_partials/footer');
    }
    public function cadastrar(){
        $emprestimo = $this -> request -> getPost();
        $this -> emprestimoModel -> save($emprestimo);
        return redirect() -> to('Emprestimo/index');
    }
    public function editar($id){
        $emprestimo = $this -> emprestimoModel -> find($id);
        $aluno = $this -> alunoModel -> findAll();
        $livro = $this -> livroModel -> findAll();
        $user = $this -> usuarioModel -> findAll();

        echo view('_partials/header');
        echo view('_partials/navbar');
        echo view('emprestimo/edit', ['emprestimo' => $emprestimo, 'listaUsuario' => $user, 'listaAluno' => $aluno, 'listaLivro' => $livro]);
        echo view('_partials/footer');
    }
    public function salvar(){
        $emprestimo = $this->request->getPost();
        $this->emprestimoModel->save($emprestimo);
        $this->livroModel->update();
        return redirect() -> to('Emprestimo/index');
    }
    
    public function excluir(){
        $emprestimo = $this->request->getPost();
        $this->emprestimoModel->delete($emprestimo);
        return redirect()->to('Emprestimo/index');
    }
}


