<?php
/*
	* Classe Rota
	* Cria as URL, carrega os controladores, métodos e parâmetros
	* Formato URL - /controlador/metodo/parametros
*/
class Rota {
	//atributos da classe
	private $controlador = 'Paginas';
	private $metodo = 'index';
	private $parametros = [];
	
	public function __construct(){

//////////////////////   CONTROLADOR   //////////////////////////////////
		//se a url existir joga a função url na variável $url
		$url = $this->url() ? $this->url() : [0];
		
		//checa se o controlador existe
		//ucwords - Converte para maiúsculas o primeiro caractere de cada palavra
		if(file_exists('../App/Controllers/'.ucwords($url[0]).'.php')):
			//se exisitir seta como controlador
			$this->controlador = ucwords($url[0]);
			//unset - Destroi a variável especificada
			unset($url[0]);
		endif;

		//requere o controlador
		require_once '../App/Controllers/'.$this->controlador.'.php';
		//instancia do controlador
		$this->controlador = new $this->controlador;

/////////////////////////////   MÉTODO   ///////////////////////////////
		//checa se o método existe, segunda parte da url (índice "1" do array)
		if(isset($url[1])):
			//method_exists - Checa se o método da classe existe
			if(method_exists($this->controlador, $url[1])):
				$this->metodo = $url[1];
				unset($url[1]);
			endif;
		endif;

///////////////////////////   PARÂMETROS   ////////////////////////////


		//Se existir retorna um array com os valores se não retorna um array vazio
		//array_values - Retorna todos os valores de um array
		$this->parametros = $url ? array_values($url) : [];
		//call_user_func_array - chama uma dada função de usuário com um array de parâmetros
		call_user_func_array([$this->controlador, $this->metodo], $this->parametros);
	}

//////////////////   ÍNICIO / COLETA DE DADOS   ///////////////////////

	// retorna a url em um array
	private function url() {
		// o filtro FILTER_SANITAZE_URL remove todos os caracteres ilegais de uma URL
		$url = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
		//verifica se a url existe
		if(isset($url)):
			//trim - Retira espaço no início e final de uma string
			//rtrim - Retira espaço em branco (ou outros caracteres) do final da string
			$url = trim(rtrim($url,'/'));
			//explode - Divide uma string em strings, retorna um array
			$url = explode('/',$url);
			return $url;
		endif;
	}

}

?>