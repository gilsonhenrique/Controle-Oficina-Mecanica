<?php

class Validacao {

	public static function checarNome($nome){
		if(!preg_match('/^([a-zA-ZÁáÉéíÍóÓúÚçÇ ]+)?$/',$nome)):
		
		return true;
		
		else:
			
		return false;
		endif;
	}


	public static function checarEmail($email){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			return true;
		else:
			return false;
		endif;
	}


	public static function camposVazios(){
		$dados = [
					'nome' => '',
					'email' => '',
					'login' => '',
					'senha' => '',
					'confirmar_senha' => '',
					'nome_erro' => '',
					'email_erro' => '',
					'login_erro' => '',
					'senha_erro' => '',
					'confirmar_senha_erro' => '',
					];

		return $dados;
	}

	public static function dataBr($data){
		if(isset($data)):
			return date('d/m/Y H:i' , strtotime($data));
		else:
			return false;
		endif;

	}



}

?>