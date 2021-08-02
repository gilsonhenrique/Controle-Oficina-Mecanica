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
				'nome' => strtoupper(trim($formulario['nome'])),
				'celular' => trim($formulario['celular']),
				'placa' => strtoupper(trim($formulario['placa'])),
				'veiculo' => strtoupper(trim($formulario['veiculo'])),
				'prisma' => trim(($formulario['prisma'])),
				'ano' => trim($formulario['ano']),
				'km' => trim($formulario['km']),
				'combustivel' => strtoupper(trim($formulario['combustivel'])),
				'cor' => strtoupper(trim($formulario['cor'])),
				'irregularidade' => strtoupper(trim($formulario['irregularidade'])),
				'diagnostico' => strtoupper(trim($formulario['diagnostico'])),
				'pecnec' => strtoupper(trim($formulario['pecnec'])),
				'mecrespd' => strtoupper(trim($formulario['mecrespd'])),
				'obs' => strtoupper(trim($formulario['obs'])),
				'mecresps' => strtoupper(trim($formulario['mecresps'])),
				'status' => strtoupper(trim($formulario['status'])),				
				];

				if(in_array('', $formulario)):
				// ......Validações de Campos Vazios....................


					if(empty($formulario['nome']) or empty($formulario['placa']) or empty($formulario['celular']) or empty($formulario['veiculo'])):
						$message = '<div class="alert alert-danger" role="alert">Preencha os campos obrigatórios</div>';
						echo $message;
					
					elseif($this->usuarioModel->cadastrar($dados)):

						$message = '<div class="alert alert-success" role="alert">Cadastro realizado com sucesso!</div>';
						echo $message;

					// dados em branco para o formulario aparecer "limpo"
						$dados = [
								'prisma' => '',
								'nome' => '',
								'celular' => '',
								'placa' => '',
								'veiculo' => '',
								'ano' => '',
								'km' => '',
								'combustivel' => '',
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
						die("Erro no armazenar usuário no banco de dados");
					
					endif;	


				endif;

				// 	
		else:
				

			$dados = [
					'prisma' => '',
					'nome' => '',
					'celular' => '',
					'placa' => '',
					'veiculo' => '',
					'ano' => '',
					'km' => '',
					'combustivel' => '',					
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
				'nome' => strtoupper(trim($formulario['nome'])),
				'celular' => trim($formulario['celular']),
				'placa' => strtoupper(trim($formulario['placa'])),
				'veiculo' => strtoupper(trim($formulario['veiculo'])),
				'ano' => trim($formulario['ano']),
				'km' => trim($formulario['km']),
				'combustivel' => strtoupper(trim($formulario['combustivel'])),				
				'cor' => strtoupper(trim($formulario['cor'])),
				'irregularidade' => strtoupper(trim($formulario['irregularidade'])),
				'diagnostico' => strtoupper(trim($formulario['diagnostico'])),
				'pecnec' => strtoupper(trim($formulario['pecnec'])),
				'mecrespd' => strtoupper(trim($formulario['mecrespd'])),
				'obs' => strtoupper(trim($formulario['obs'])),
				'mecresps' => strtoupper(trim($formulario['mecresps'])),
				'status' => strtoupper(trim($formulario['status'])),
				];


				if(in_array('', $formulario)):
				// ......Validações de Campos Vazios....................


					if(empty($formulario['nome']) or empty($formulario['placa'])):
						$message = '<div class="alert alert-danger" role="alert">Preencha os campos obrigatórios</div>';
						echo $message;
//					                             metodo
					elseif($this->usuarioModel->atualizar($dados)):

						$message = '<div class="alert alert-success" role="alert">Cadastro atualizado com sucesso!</div>';
						echo $message;


					// dados em branco para o formulario aparecer "limpo"						
						$dados = [
							'id' => '',
							'prisma' => '',
							'nome' => '',
							'celular' => '',
							'placa' => '',
							'veiculo' => '',
							'ano' => '',
							'km' => '',
							'combustivel' => '',
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
				'veiculo' => $veiculo->veiculo,
				'ano' => $veiculo->ano,
				'combustivel' => $veiculo->combustivel,					
				'km' => $veiculo->km,
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
		$message = '<div class="alert alert-success" role="alert">Ítem excluido com sucesso!</div>';
		echo $message; 

		$dados = [
			'id' => '',
			'prisma' => '',
			'nome' => '',
			'celular' => '',
			'placa' => '',
			'veiculo' => '',
			'ano' => '',
			'km' => '',
			'combustivel' => '',				
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

	public function listar(){

		$dados = [

			'veiculos' => $this->usuarioModel->verVeiculos()];

//var_dump($dados);/*   ### DEBUG   ###   */

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