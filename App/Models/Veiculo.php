<?php

class Veiculo {

	private $db;

	public function __construct(){
// Instancia classe em Db_connect.php		
		$this->db = new Db_Connect();
	}

/////////////////////////////////////////////////////////////////////////

// Cadastrar veículo no BD

	public function cadastrar($dados){

		$this->db->query("INSERT INTO veiculos(prisma, nome, celular, placa, fabricacao, modelo, cilindrada, km, combustivel, veiculo, cor, irregularidade, diagnostico, pecnec, mecrespd, obs, mecresps, status, aguardando_dt, executando_dt, liberado_dt, pendente_dt) VALUES (:prisma, :nome, :celular, :placa, :fabricacao, :modelo, :cilindrada, :km, :combustivel, :veiculo, :cor, :irregularidade, :diagnostico, :pecnec, :mecrespd, :obs, :mecresps, :status, :aguardando_dt, :executando_dt, :liberado_dt, :pendente_dt)");
		$this->db->bind("prisma", $dados['prisma']);
		$this->db->bind("nome", $dados['nome']);
		$this->db->bind("celular", $dados['celular']);
		$this->db->bind("placa", $dados['placa']);
		$this->db->bind("fabricacao", $dados['fabricacao']);
		$this->db->bind("modelo", $dados['modelo']);
		$this->db->bind("cilindrada", $dados['cilindrada']);		
		$this->db->bind("km", $dados['km']);
		$this->db->bind("combustivel", $dados['combustivel']);
		$this->db->bind("veiculo", $dados['veiculo']);
		$this->db->bind("cor", $dados['cor']);
		$this->db->bind("irregularidade", $dados['irregularidade']);
		$this->db->bind("diagnostico", $dados['diagnostico']);		
		$this->db->bind("pecnec", $dados['pecnec']);
		$this->db->bind("mecrespd", $dados['mecrespd']);
		$this->db->bind("obs", $dados['obs']);
		$this->db->bind("mecresps", $dados['mecresps']);
		$this->db->bind("status", $dados['status']);
		$this->db->bind("aguardando_dt", $dados['aguardando_dt']);
		$this->db->bind("executando_dt", $dados['executando_dt']);
		$this->db->bind("liberado_dt", $dados['liberado_dt']);
		$this->db->bind("pendente_dt", $dados['pendente_dt']);
// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}
/////////////////////////////////////////////////////////////////////////

// Atualizar Veiculo no BD

	public function atualizar($dados){

		$this->db->query("UPDATE veiculos SET prisma = :prisma, nome= :nome, celular = :celular, placa = :placa, fabricacao = :fabricacao, modelo = :modelo, cilindrada = :cilindrada, km = :km, combustivel = :combustivel, veiculo = :veiculo, cor = :cor, irregularidade = :irregularidade, diagnostico = :diagnostico, pecnec = :pecnec, mecrespd = :mecrespd, obs = :obs, mecresps = :mecresps, status = :status, aguardando_dt = :aguardando_dt, executando_dt = :executando_dt, liberado_dt = :liberado_dt, pendente_dt = :pendente_dt  WHERE id = :id");
		$this->db->bind('id', $dados['id']);
		$this->db->bind("prisma", $dados['prisma']);
		$this->db->bind("nome", $dados['nome']);
		$this->db->bind("celular", $dados['celular']);
		$this->db->bind("placa", $dados['placa']);
		$this->db->bind("fabricacao", $dados['fabricacao']);
		$this->db->bind("modelo", $dados['modelo']);
		$this->db->bind("cilindrada", $dados['cilindrada']);
		$this->db->bind("km", $dados['km']);
		$this->db->bind("combustivel", $dados['combustivel']);
		$this->db->bind("veiculo", $dados['veiculo']);
		$this->db->bind("cor", $dados['cor']);
		$this->db->bind("irregularidade", $dados['irregularidade']);
		$this->db->bind("diagnostico", $dados['diagnostico']);		
		$this->db->bind("pecnec", $dados['pecnec']);
		$this->db->bind("mecrespd", $dados['mecrespd']);
		$this->db->bind("obs", $dados['obs']);
		$this->db->bind("mecresps", $dados['mecresps']);
		$this->db->bind("status", $dados['status']);
		$this->db->bind("aguardando_dt", $dados['aguardando_dt']);
		$this->db->bind("executando_dt", $dados['executando_dt']);
		$this->db->bind("liberado_dt", $dados['liberado_dt']);
		$this->db->bind("pendente_dt", $dados['pendente_dt']);
		// Chama a função executa no Db_connect
		if($this->db->executa()):
			return true;
		else:
			return false;
		endif;
	}
/////////////////////////////////////////////////////////////////////////

// Excluir veículo no BD

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

// Consultar "Todos" os veículos ou por "Status"

	public function verVeiculos($consulta){

		if($consulta == 'TODOS'):
		$this->db->query("SELECT * FROM veiculos ORDER BY id DESC");
		return $this->db->resultados();		
		else:
		$this->db->query("SELECT * FROM veiculos WHERE status = '$consulta' ORDER BY id DESC");

		return $this->db->resultados();

		endif;

	}
/////////////////////////////////////////////////////////////////////////

// Função para ver por id
	public function verPorId($id){
		$this->db->query("SELECT * FROM veiculos WHERE id = :id");
		$this->db->bind('id', $id);

		return $this->db->resultado();
	}
/////////////////////////////////////////////////////////////////////////

// Consultar por placa

	public function pesquisar($busca){

		if(isset($_POST['placa'])):
		$this->db->query("SELECT * FROM veiculos WHERE placa = :placa");
		$this->db->bind('placa', $busca);
		return $this->db->resultados();
		endif;

		if(isset($_POST['nome'])):
		$this->db->query("SELECT * FROM veiculos WHERE nome LIKE '%$busca%' ");
		return $this->db->resultados();
		endif;
	}


}

?>