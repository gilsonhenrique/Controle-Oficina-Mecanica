<?php

class Usuario {

	private $db;


	public function __construct(){
// Instancia classe em Db_connect.php		
		$this->db = new Db_Connect();
	}

/////////////       EM CONSTRUÇÃO    ///////////
/////////////////////////////////////////////////////////////////////////

// Função cadastrar no BD
	public function cadastrar($dados){

		$this->db->query("INSERT INTO usuarios(nome, login, senha) VALUES (:nome, :login, :senha)");
		$this->db->bind("nome", $dados['nome']);
		$this->db->bind("login", $dados['login']);
		$this->db->bind("senha", $dados['senha']);

// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}


/////////////////////////////////////////////////////////////////////////


// Função para atualizar o Veiculo no BD
	public function atualizar($dados){

		$this->db->query("UPDATE usuarios SET nome = :nome, login= :login, senha = :senha  WHERE id = :id");
		$this->db->bind('id', $dados['id']);
		$this->db->bind("nome", $dados['nome']);
		$this->db->bind("login", $dados['login']);
		$this->db->bind("senha", $dados['senha']);


		// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}


// Função para deletar Veiculo no BD
	public function destruir($id){

		$this->db->query("DELETE FROM usuarios WHERE id = :id");
		$this->db->bind("id", $id);

		// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}


/////////////////////////////////////////////////////////////////////////


////////     Fim   EM CONSTRUÇÃO    ///////////  /////////


	public function checarLogin($nome, $senha){

	if($nome == 'oficina' && $senha == '003-9'):
		return $usuario = array('nome'=>'oficina', 'senha'=>'a003-9');
	else:
		return false;
	endif;

	}

}

?>