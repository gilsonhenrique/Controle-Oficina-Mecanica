<?php

class Usuarios extends Controller {

	public function __construct(){
// Variavel usuarioModel chama function model (Libraries/Controller)
// La embaixo, chama função cadastrar
		$this->usuarioModel = $this->model('Usuario');

	}

///////////////////////////////////////////////////////////////////

	public function logar(){

		$formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($formulario)):

			$dados = [
				'nome' => trim($formulario['nome']),
				'senha' => trim($formulario['senha']),
				];

				$dados['alerta'] = '';

			if(in_array('', $formulario)):
// ......Validações de Campos Vazios...............................

				if(empty($formulario['nome'])):
					$dados['nome_erro'] = 'Preencha o campo nome';

				endif;

				if(empty($formulario['senha'])):
					$dados['senha_erro'] = 'Preencha o campo Senha';	

				endif;	

			else:

				$usuario = $this->usuarioModel->checarLogin($formulario['nome'], $formulario['senha']);
// Variável $usuario retorna o regitro completo completo do BD. 
					if($usuario):
				
						$this->criarSessaoUsuario($usuario);

//header("Location: 'URL'");

					else:
						$dados['alerta'] = true;

					endif;

			endif;


		else:
				

			$dados = [
					'nome' => '',
					'senha' => '',
					'alerta' => '',
					];

		endif;


//var_dump($formulario);/*   ### DEBUG   ###   */
//var_dump($dados);/*   ### DEBUG   ###   */

// a view recebe $dados para exebição na tela
		$this->view('Usuarios/logar', $dados);
	}

	private function criarSessaoUsuario($usuario){
		$_SESSION['usuario_nome'] = $usuario['nome'];
		$_SESSION['usuario_senha'] = $usuario['senha'];

		Url::redirecionar('paginas/index');

	}


	public function sair(){
		unset($_SESSION['usuario_nome']);
		unset($_SESSION['usuario_senha']);

		session_destroy();

		Url::redirecionar('usuarios/logar');

	}


}


?>