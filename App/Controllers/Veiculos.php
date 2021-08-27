<?php

class Veiculos extends Controller {

	public function __construct(){
// Variavel usuarioModel chama function model (Libraries/Controller)
// La embaixo, chama função cadastrar
		$this->usuarioModel = $this->model('Veiculo');

	}

	public function cadastrar(){

		$formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($formulario)):

			$dados = [
				'nome' => mb_strtoupper(trim($formulario['nome'])),
				'celular' => trim($formulario['celular']),
				'prisma' => trim(($formulario['prisma'])),
				'placa' => mb_strtoupper(trim($formulario['placa'])),
				'fabricacao' => mb_strtoupper(trim($formulario['fabricacao'])),
				'modelo' => mb_strtoupper(trim($formulario['modelo'])),
				'cilindrada' => mb_strtoupper(trim($formulario['cilindrada'])),
				'km' => trim($formulario['km']),
				'combustivel' => mb_strtoupper(trim($formulario['combustivel'])),
				'veiculo' => mb_strtoupper(trim($formulario['veiculo'])),
				'cor' => mb_strtoupper(trim($formulario['cor'])),
				'irregularidade' => mb_strtoupper(trim($formulario['irregularidade'])),
				'diagnostico' => mb_strtoupper(trim($formulario['diagnostico'])),
				'pecnec' => mb_strtoupper(trim($formulario['pecnec'])),
				'mecrespd' => mb_strtoupper(trim($formulario['mecrespd'])),
				'obs' => mb_strtoupper(trim($formulario['obs'])),
				'mecresps' => mb_strtoupper(trim($formulario['mecresps'])),
				'status' => mb_strtoupper(trim($formulario['status'])),			
				];

				if(in_array('', $formulario)):

				// ......Validações de Campos Vazios....................
					if(empty($formulario['nome']) or empty($formulario['placa']) or empty($formulario['celular'])):
						$message = '<div class="container p-3" style= "text-align:center"><div class="alert alert-danger" role="alert">Preencha os campos obrigatórios</div></div>';
						echo $message;
					
					elseif($this->usuarioModel->cadastrar($dados)):
						$viewCadastrar= URL.'/Veiculos/cadastrar';
						header("refresh:5; url={$viewCadastrar}");
						$message = '<div class="container p-3" style= "text-align:center"><div class="alert alert-success" role="alert">Cadastro realizado com sucesso!<br>Aguarde, carregando a tela de cadastro...</div></div>';
						echo $message;

					else:
						die("Erro no armazenar usuário no banco de dados");
					
					endif;	


				endif;

				// 	
		else:
				
// ............P/ carregar a view cadastrar inicial............ 
			$dados = [
					'prisma' => '',
					'nome' => '',
					'celular' => '',
					'placa' => '',
					'fabricacao' => '',
					'modelo' => '',
					'cilindrada' => '',
					'km' => '',
					'combustivel' => '',							
					'veiculo' => '',
					'cor' => '',
					'irregularidade' => '',
					'diagnostico' => '',
					'pecnec' => '',
					'mecrespd' => '',
					'obs' => '',								
					'mecresps' => '',
					'status' => '',								
					];

		endif;

//var_dump($formulario);/*   ### DEBUG   ###   */
//var_dump($dados);/*   ### DEBUG   ###   */

// a view recebe $dados para exebição na tela
		$this->view('Veiculos/cadastrar', $dados);
	}


///////////////////////////////////////////////////////////////////

//  metodo "editar"....................................................
	public function editar($id){

		$formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($formulario)):

			$dados = [
				'id'=> $id,
				'prisma' => trim(($formulario['prisma'])),
				'nome' => mb_strtoupper(trim($formulario['nome'])),
				'celular' => trim($formulario['celular']),
				'placa' => mb_strtoupper(trim($formulario['placa'])),
				'fabricacao' => trim($formulario['fabricacao']),
				'modelo' => trim($formulario['modelo']),
				'cilindrada' => trim($formulario['cilindrada']),
				'km' => trim($formulario['km']),
				'combustivel' => mb_strtoupper(trim($formulario['combustivel'])),
				'veiculo' => mb_strtoupper(trim($formulario['veiculo'])),		
				'cor' => mb_strtoupper(trim($formulario['cor'])),
				'irregularidade' => mb_strtoupper(trim($formulario['irregularidade'])),
				'diagnostico' => mb_strtoupper(trim($formulario['diagnostico'])),
				'pecnec' => mb_strtoupper(trim($formulario['pecnec'])),
				'mecrespd' => mb_strtoupper(trim($formulario['mecrespd'])),
				'obs' => mb_strtoupper(trim($formulario['obs'])),
				'mecresps' => mb_strtoupper(trim($formulario['mecresps'])),
				'status' => mb_strtoupper(trim($formulario['status'])),
				];


				if(in_array('', $formulario)):

				// ......Validações de Campos Vazios....................
					if(empty($formulario['nome']) or empty($formulario['placa'])):
						$message = '<div class="container p-3" style= "text-align:center"><div class="alert alert-danger" role="alert">Preencha os campos obrigatórios</div></div>';
						echo $message;
//					                             metodo
					elseif($this->usuarioModel->atualizar($dados)):
				//......Mensagem sucesso, redirecionando view cadastrar depois 5seg. ..........
					$viewCadastrar= URL.'/Veiculos/cadastrar';
					header("refresh:5; url={$viewCadastrar}");
					$message = '<div class="container p-3" style= "text-align:center"><div class="alert alert-success" role="alert">Cadastro atualizado com sucesso!<br>Aguarde, retornando à tela de cadastro...</div></div>';
					echo $message;

					else:
						die("Erro ao atualizar o cadastro no banco de dados");
					
					endif;	


				endif;

				// 	
		else:
	
			$veiculo = $this->usuarioModel->verPorId($id);
		// dados em branco para o formulario aparecer "limpo"
			$dados = [
				'id'=> $id,	
				'prisma' => $veiculo->prisma,
				'nome' => $veiculo->nome,
				'celular' => $veiculo->celular,
				'placa' => $veiculo->placa,
				'fabricacao' => $veiculo->fabricacao,
				'modelo' => $veiculo->modelo,
				'cilindrada' => $veiculo->cilindrada,
				'km' => $veiculo->km,
				'combustivel' => $veiculo->combustivel,
				'veiculo' => $veiculo->veiculo,
				'cor' => $veiculo->cor,
				'irregularidade' => $veiculo->irregularidade,
				'diagnostico' => $veiculo->diagnostico,
				'pecnec' => $veiculo->pecnec,
				'mecrespd' => $veiculo->mecrespd,
				'obs' => $veiculo->obs,								
				'mecresps' => $veiculo->mecresps,
				'status' => $veiculo->status,							
			];

		endif;

//var_dump($relatorio);/*   ### DEBUG   ###   */
//var_dump($dados);/*   ### DEBUG   ###   */

// a view recebe $dados para exebição na tela
		$this->view('Veiculos/editar', $dados);
	}



//  metodo 'deletar".....................................................
	public function deletar($id){

//	$dados = ['id'=> $id];
		
	if($this->usuarioModel->destruir($id)):
		$viewCadastrar= URL.'/Veiculos/cadastrar';
		header("refresh:5; url={$viewCadastrar}");
		$message = '<div class="container p-3" style= "text-align:center"><div class="alert alert-success" role="alert">Ítem excluido com sucesso!<br>Aguarde, retornando à tela de cadastro...</div></div>';
		echo $message; 

		$dados = [
			'id' => '',
			'prisma' => '',
			'nome' => '',
			'celular' => '',
			'placa' => '',
			'fabricacao' => '',
			'modelo' => '',
			'cilindrada' => '',
			'km' => '',
			'combustivel' => '',
			'veiculo' => '',				
			'cor' => '',
			'irregularidade' => '',
			'diagnostico' => '',
			'pecnec' => '',
			'mecrespd' => '',
			'obs' => '',								
			'mecresps' => '',
			'status' => '',					
		];


	else:
		die("Erro no atualizar o os dados no banco de dados");
					
	endif;	

		$this->view('Veiculos/editar', $dados);

	}

//  metodo 'listar".....................................................
	public function listar($consulta){

		$dados = [

			'veiculos' => $this->usuarioModel->verVeiculos(mb_strtoupper($consulta))];

//var_dump($dados);/*   ### DEBUG   ###   */
//var_dump($dados['veiculos']);
			$this->view('Veiculos/listar', $dados);

	}


//  metodo "ver".........................................................
	public function ver($id){
		
		$dados = [

			'veiculos' => $this->usuarioModel->verPorId($id)];

	// a view (\PHP7eMVC\App\Views\Posts\ver.php) recebe $dados para exebição na tela

//var_dump($dados);
		$this->view('Veiculos/ver',$dados);

	}
	


	public function servico($id){

		
		$dados = [

			'veiculos' => $this->usuarioModel->verPorId($id)];

	// a view (\PHP7eMVC\App\Views\Posts\ver.php) recebe $dados para exebição na tela
//var_dump($id);
//var_dump($dados);
		$this->view('Veiculos/servico',$dados);

	}

}

?>