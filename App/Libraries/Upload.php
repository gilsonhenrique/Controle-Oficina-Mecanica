<?php

class Upload {

	private $diretorio;
	private $arquivo;
	private $tamanho;
	private $nome;
	private $pasta;

	public function __construct(string $diretorio = null){

		$this->diretorio = $diretorio ?? 'Uploads';

		if(!file_exists($this->diretorio) && !is_dir($this->diretorio)):
			mkdir($this->diretorio, 0777);
	endif;

	}

	public function imagem(array $imagem, string $nome = null, string $pasta = null, int $tamanho = null) {

		$this->arquivo = $imagem;
		$this->nome = $nome  ?? pathinfo($this->arquivo['name'], PATHINFO_FILENAME);
		$this->pasta = $pasta ?? 'imagens';
		$this->tamanho = $tamanho ?? 1;

		$extensao = pathinfo($this->$arquivo['name'], PATHINFO_EXTENSION);

		$extensoesValidas = ['png', 'jpg'];
		$tipoValidos = ['image/jpeg', 'image/png'];
		

		if(!in_array($extensao, $extensoesValidas)):
			echo 'A extensao não é permitido';
		elseif (!in_array($this->arquivo['type'], $tiposValidos)):
			echo 'Tipo inválido';
		elseif ($this->arquivo['size'] > $this->tamanho * (1024 * 1024)):
			echo 'Arquivo muito grande';
		else:
			$this->criarPasta();
			$this->renomearArquivo();
			$this->moverArquivo();

		endif;

	}

	private function renomearArquivo(){
		$arquivo = $this->nome.strrchr($this->arquivo['name'],'.');
		if(file_exists($this->diretorio.DIRECTORY_SEPARATOR.$this->pasta.DIRECTORY_SEPARATOR.$arquivo)):
			$arquivo = $this-nome.'-'.uniqid().strrchr($this->arquivo['name'], '-');
		endif;
		$this->nome = $arquivo;
	}


	private function criarPasta(){

	if(!file_exists($this->diretorio.DIRECTORY_SEPARATOR.$this->pasta && !is_dir($this->diretorio.DIRECTORY_SEPARATOR.$this->pasta)):
			mkdir($this->diretorio.DIRECTORY_SEPARATOR.$this->pasta, 0777);
	endif;

	}




	private function moverArquivo(){
		if(move_uploaded_file($this->arquivo['tmp_name'], $this->diretorio.DIRECTORY_SEPARATOR.$this->pasta.DIRECTORY_SEPARATOR.$this->nome)):
			$this->resultado = $this->nome;
		else:
			echo 'Erro ao mover arquivo';
		endif;
	}

}


?>