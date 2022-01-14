<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;

class Usuario extends Controller {

	protected $usuariosModel;

	public function __construct() {
		helper('form');
		$this->usuariosModel = new UsuarioModel;
	}

	public function index()
	{

		$usuarios = $this->usuariosModel->findAll();

		$variaveis = [
			'titulo' => 'Tela de usuários',
			'body' => 'Esta é a tela de usuários',
			'usuarios' => $usuarios
		];

		return view('usuarios/home', $variaveis);
	}
	public function create()
	{
		return view('usuarios/form');
	}

	public function store()
	{

		$dados = $this->request->getPost();

		$request = $this->usuariosModel->save($dados);

		if($request){
			echo view('sucesso');
		}
		else{
			echo view('erro');
		}
	}

	public function edit($id = null)
	{
		$usuario = $this->usuariosModel->find($id);

		echo view('usuarios/form', [
			'usuario' => $usuario
		]);
	}

	public function excluir($id = null)
	{
		if($this->usuariosModel->delete($id)){
			echo view('sucesso');
		}
		else{
			echo view('erro');
		}
	}
}