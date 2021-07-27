<?php

class Veiculo {

	private $db;

	public function __construct(){
// Instancia classe em Db_connect.php		
		$this->db = new Db_Connect();
	}

/////////////////////////////////////////////////////////////////////////

// Função cadastrar no BD
	public function cadastrar($dados){

		$this->db->query("INSERT INTO veiculos(prisma, nome, celular, placa, veiculo, ano, km, combustivel, cor, irregularidade, diagnostico, pecnec, mecrespd, obs, mecresps, status) VALUES (:prisma, :nome, :celular, :placa, :veiculo, :ano, :km, :combustivel, :cor, :irregularidade, :diagnostico, :pecnec, :mecrespd, :obs, :mecresps, :status)");
		$this->db->bind("prisma", $dados['prisma']);
		$this->db->bind("nome", $dados['nome']);
		$this->db->bind("celular", $dados['celular']);
		$this->db->bind("placa", $dados['placa']);
		$this->db->bind("veiculo", $dados['veiculo']);
		$this->db->bind("ano", $dados['ano']);
		$this->db->bind("km", $dados['km']);
		$this->db->bind("combustivel", $dados['combustivel']);		
		$this->db->bind("cor", $dados['cor']);
		$this->db->bind("irregularidade", $dados['irregularidade']);
		$this->db->bind("diagnostico", $dados['diagnostico']);		
		$this->db->bind("pecnec", $dados['pecnec']);
		$this->db->bind("mecrespd", $dados['mecrespd']);
		$this->db->bind("obs", $dados['obs']);
		$this->db->bind("mecresps", $dados['mecresps']);
		$this->db->bind("status", $dados['status']);

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

		$this->db->query("UPDATE veiculos SET prisma = :prisma, nome= :nome, celular = :celular, placa = :placa, veiculo = :veiculo, ano = :ano, km = :km, combustivel = :combustivel, cor = :cor, irregularidade = :irregularidade, diagnostico = :diagnostico, pecnec = :pecnec, mecrespd = :mecrespd, obs = :obs, mecresps = :mecresps, status = :status  WHERE id = :id");
		$this->db->bind('id', $dados['id']);
		$this->db->bind("prisma", $dados['prisma']);
		$this->db->bind("nome", $dados['nome']);
		$this->db->bind("celular", $dados['celular']);
		$this->db->bind("placa", $dados['placa']);
		$this->db->bind("veiculo", $dados['veiculo']);
		$this->db->bind("ano", $dados['ano']);
		$this->db->bind("km", $dados['km']);
		$this->db->bind("combustivel", $dados['combustivel']);		
		$this->db->bind("cor", $dados['cor']);
		$this->db->bind("irregularidade", $dados['irregularidade']);
		$this->db->bind("diagnostico", $dados['diagnostico']);		
		$this->db->bind("pecnec", $dados['pecnec']);
		$this->db->bind("mecrespd", $dados['mecrespd']);
		$this->db->bind("obs", $dados['obs']);
		$this->db->bind("mecresps", $dados['mecresps']);
		$this->db->bind("status", $dados['status']);


		// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}


// Função para deletar Veiculo no BD
	public function destruir($id){

		$this->db->query("DELETE FROM veiculos WHERE id = :id");
		$this->db->bind("id", $id);

		// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}


/////////////////////////////////////////////////////////////////////////

// Função listar itens no BD

	public function verVeiculos(){
		$this->db->query("SELECT * FROM veiculos ORDER BY id DESC");

		return $this->db->resultados();

	}


/////////////////////////////////////////////////////////////////////////

// Função para ver por id
	public function verPorId($id){
		$this->db->query("SELECT * FROM veiculos WHERE id = :id");
		$this->db->bind('id', $id);

		return $this->db->resultado();
	}

}

?>