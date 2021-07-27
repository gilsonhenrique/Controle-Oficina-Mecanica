<?php

class Db_Connect {
	private $host = DB['HOST'];
	private $user = DB['USUARIO'];
	private $pass = DB['SENHA'];
	private $data = DB['BANCO'];
	private $dbh;
	private $stmt;

	public function __construct(){
		//informações para conexão BD
		$dsn = 'mysql:host='. $this->host.';dbname='. $this->data;
		$opcoes = [
			//Armazena em cache a conexão para se reutilizada, evita a sobrecarga de uma nova conexão, resultando em um aplicativo mais rápido.
			PDO::ATTR_PERSISTENT => true,
			//lança uma PDOException se ocorrer um erro
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			];

		try {
			//cria a instancia do PDO
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $opcoes);
			
			} catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "<br/>";
				die();
			}
	}

	//Prepared statements com query
	public function query ($sql) {
		//Prepara uma consulta sql
		$this->stmt = $this->dbh->prepare($sql);
	}

   // vincula um valor a um parâmetro
	public function bind($parametro, $valor, $tipo = null){
		if(is_null($tipo)):
			switch(true):
				case is_int($valor):
				$tipo = PDO::PARAM_INT;
				break;
				case is_bool($valor):
				$tipo = PDO::PARAM_BOOL;
				break;
				case is_null($valor):
				$tipo = PDO::PARAM_NULL;
				break;
				default:
				$tipo = PDO::PARAM_STR;
			endswitch;
		endif;

	$this->stmt->bindValue($parametro,$valor,$tipo);

	}
// Funções de Persistencia:

	public function executa(){
		return $this->stmt->execute();
	}

	public function resultado(){
		$this->executa();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

		public function resultados(){
		$this->executa();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

		public function totalResultados(){
		return $this->stmt->rowCount();
	}

		public function ultimoIdInserido(){
		return $this->dbh->lastInsertId();
	}

}

?>